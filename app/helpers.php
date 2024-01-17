<?php
    if (! function_exists('get_criteria')) {
        function get_criteria() {
            $kritera = App\Models\KategoriWisata::get();

            foreach ($kritera as $k => $v) {
                $nilaiKriteria = App\Models\NilaiKriteria::where('id_kriteria', $v->id_kriteria)->get();

                foreach ($nilaiKriteria as $k2 => $v2) {
                    $rating[] = array(
                        "min" => $v2->min,
                        "max" => $v2->max,
                        "nilai" => $v2->score,
                    );
                }

                $kriteria[$v->id_kriteria] = array(
                    "nama" => $v->kriteria,
                    "bobot" => $v->bobot,
                    "normalisasi" => $v->bobot / 100,
                    "rating" => $rating
                );
            }

            return $kriteria;
        }
    }

    if (! function_exists('get_alternatif')) {
        function get_alternatif() {
            $wisata = App\Models\Wisata::get();

            $alternatif[] = array();

            $kriteria = get_criteria();
            foreach ($kriteria as $key => $value) {
                $nilai[$key] = $value['nama'];
            }

            $alternatif = array(
                "nama" => $nama_wisata,
                "nilai" => array(
                    "harga" => '25000',
                    "kriteria_2" => 'nilai'
                )
            );

            return $alternatif;
        }
    }

    if (! function_exists('calculate_smart')) {
        function calculate_smart() {

        }
    }
?>
