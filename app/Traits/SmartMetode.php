<?php

namespace App\Traits;

use App\Models\Alamat;
use App\Models\FasilitasWisata;
use App\Models\Kecamatan;
use App\Models\Kriteria;
use App\Models\NilaiKriteria;
use App\Models\NilaiTipeWahana;
use App\Models\NilaiWisata;
use App\Models\TipeWahana;
use App\Models\WahanaWisata;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use ArrayObject;

trait SmartMetode {
    protected $wisata, $kriteria, $tipe_wahana;

    public function setModel($listModel) {
        foreach ($listModel as $key => $value) {
            $this->$key = $value;
        }
    }

    public function MenilaiAlternatif($request) {
        $err_code = 0;
        $err_message = '';
        foreach ($this->wisata as $key => $value) {
            $checkNilai = NilaiWisata::where('id_wisata', $value->id_wisata)->get();
            if($checkNilai->count() > 0) {
                $wahana = NilaiWisata::where('id_wisata', $value->id_wisata)->delete();
            }
        }

        DB::beginTransaction();

        try  {
            foreach ($this->wisata as $key => $value) {
                $checkNilai = NilaiWisata::where('id_wisata', $value->id_wisata)->get();
                if($checkNilai->count() > 0) {
                    $wahana = NilaiWisata::where('id_wisata', $value->id_wisata)->delete();
                }

                if ($checkNilai->count() == 0) {
                    foreach ($this->tipe_wahana as $key2 => $value2) {
                        $currNilai = 0;
                        $nilai_wisata = 0;

                        // if ($value2->kriteria == "Harga") {
                        //     $currNilai = $value->harga;
                        // } else if ($value2->kriteria == 'Fasilitas') {
                        //     $currNilai = FasilitasWisata::where('id_wisata', $value->id_wisata)->count();
                        // } else if ($value2->kriteria == 'Jarak') {
                        //     // hitung jarak dengan latitude dan longtitude di tabel kecamatan
                        //     $idUser = Auth::user()->id_user;
                        //     $idkecamatanWisata = $value->id_kecamatan;

                        //     $idkecamatanUser = Alamat::where('id_user', $idUser)->orderBy('created_at', 'desc')->get()->first()->id_kecamatan;

                        //     $userKecamatan = Kecamatan::find($idkecamatanUser);
                        //     $wisataKecamatan = Kecamatan::find($idkecamatanWisata);

                        //     $currNilai = $this->distance($userKecamatan->latitude, $userKecamatan->longitude, $wisataKecamatan->latitude, $wisataKecamatan->longitude, 'K');
                        // } else if ($value2->kriteria == 'Aksesbilitas') {
                        //     $nilai_wisata = $value->aksesbilitas->nilai;
                        // }

                        // if ($currNilai != 0 && $nilai_wisata == 0) {
                        //     $nilai_wisata = NilaiKriteria::where('id_kriteria', $value2->id_kriteria)
                        //                         ->where('id_user', '8')
                        //                         ->where(function($query) use ($currNilai) {
                        //                             $query->where('min', '<=', $currNilai);
                        //                             $query->where('max', '>=', $currNilai);
                        //                         })
                        //                         ->get();

                        //     if ($nilai_wisata->count() > 0) {
                        //         $nilai_wisata = $nilai_wisata->first()->nilai;
                        //     } else {
                        //         $nilai_wisata = NilaiKriteria::where('id_kriteria', $value2->id_kriteria)
                        //                             ->where('id_user', '8')
                        //                             ->orderBy('nilai', 'asc')
                        //                             ->get()->first()->nilai;
                        //     }
                        // }

                        $total_wahana = WahanaWisata::where('id_wisata', $value->id_wisata)->where('id_tipe_wahana', $value2->id_tipe_wahana)->count();

                        $nilai_wisata = NilaiTipeWahana::where('id_tipe_wahana', $value2->id_tipe_wahana)
                                            ->where('id_user', '8')
                                            ->where(function($query) use ($total_wahana) {
                                                $query->where('min', '<=', $total_wahana);
                                                $query->where(function($query2) use ($total_wahana) {
                                                    $query2->where('max', '>=', $total_wahana);
                                                    $query2->orWhere('max', '==', 0);
                                                });
                                            })
                                            ->get()->first()->nilai_tipe_wahana;

                        NilaiWisata::create([
                            'id_wisata' => $value->id_wisata,
                            'id_tipe_wahana' => $value2->id_tipe_wahana,
                            'nilai_wisata' => $nilai_wisata,
                            'created_at' => date('Y-m-d H:i:s'),
                            'updated_at' => date('Y-m-d H:i:s')
                        ]);
                    }
                }
            }

            DB::commit();
        } catch (\Exception $e) {
            DB::rollback();
            $err_code++;
            $err_message = $e;
        }
        $response = array(
            'err_code' => $err_code,
            'err_message' => $err_message
        );

        return $this->Normalisasi();
    }

    public function Normalisasi() {
        $total_bobot = $this->tipe_wahana->sum('bobot');
        $err_code = 0;
        $err_message = '';
        DB::beginTransaction();
        try  {
            foreach ($this->tipe_wahana as $key => $value) {
                $normalisasi = $value->bobot / $total_bobot;

                // Kriteria::where('id_kriteria', $value->id_kriteria)->update([
                //     'normalisasi' => $normalisasi
                // ]);
                TipeWahana::where('id_tipe_wahana', $value->id_tipe_wahana)->update([
                    'bobot_normalisasi' => $normalisasi
                ]);
            }
            DB::commit();
        } catch (\Exception $e) {
            DB::rollback();
            $err_code++;
            $err_message = $e;
        }

        $response = array(
            'err_code' => $err_code,
            'err_message' => $err_message
        );

        return $this->Utility();
    }

    public function Utility() {
        $nilaiUtility = array();

        foreach($this->wisata as $key => $value) {
            foreach($this->tipe_wahana as $key2 => $value2) {
                // $nilai_wisata = NilaiWisata::where('id_wisata', $value->id_wisata)->where('id_kriteria', $value2->id_kriteria)->get()->first()->nilai_wisata;
                $nilai_wisata = NilaiWisata::where('id_wisata', $value->id_wisata)->where('id_tipe_wahana', $value2->id_tipe_wahana)->get();
                $nilai_wisata = $nilai_wisata->first()->nilai_wisata;
                $nilaiUtility[$value->id_wisata][$value2->id_tipe_wahana] = 100 * (($nilai_wisata - 0) / (100 - 0));
            }
        }

        return $nilaiUtility;
    }

    public function getAkhir($request) {
        $err_code = 0;
        $err_message = '';

        $nilaiUtility = $this->MenilaiAlternatif($request);

        $nilaiAkhir = array();

        foreach ($nilaiUtility as $key => $value) {
            $total_utility = 0;
            foreach ($this->tipe_wahana as $key2 => $value2) {
                $total_alternatif = $value[$value2->id_tipe_wahana] * $value2->bobot_normalisasi;
                $nilaiAkhir['"' . $key . '"'][$value2->id_tipe_wahana] = $total_alternatif;
                $total_utility += $total_alternatif;
            }

            $nilaiAkhir['"' . $key . '"']['total'] = $total_utility;
        }

        $rearrange_wisata = array();
        foreach ($this->wisata as $key => $value) {
            $rearrange_wisata[$value['id_wisata']] = $value['nama_wisata'];
        }

        $response = array(
            'wisata' => $rearrange_wisata,
            'kriteria' => $this->tipe_wahana,
            'utility' => $nilaiUtility,
            'nilai_akhir' => $nilaiAkhir,
        );

        $sort_akhir = $nilaiAkhir;

        $sorted_akhir = new ArrayObject($sort_akhir);
        $sorted_akhir->uasort(function($a, $b) {
            if ($b['total'] == $a['total']) return 0;
            return ($b['total'] < $a['total']) ? -1 : 1;
        });

        $response['sorted_akhir'] = $sorted_akhir;

        return $response;
    }

    public function distance($lat1, $lon1, $lat2, $lon2, $unit) {
        $theta = $lon1 - $lon2;
        $dist = sin(deg2rad($lat1)) * sin(deg2rad($lat2)) +  cos(deg2rad($lat1)) * cos(deg2rad($lat2)) * cos(deg2rad($theta));
        $dist = acos($dist);
        $dist = rad2deg($dist);
        $miles = $dist * 60 * 1.1515;
        $unit = strtoupper($unit);

        if ($unit == "K") {
            return ($miles * 1.609344);
        } else if ($unit == "N") {
            return ($miles * 0.8684);
        } else {
            return $miles;
        }
    }
}
