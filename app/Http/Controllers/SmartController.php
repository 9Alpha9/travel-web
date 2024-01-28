<?php

namespace App\Http\Controllers;

use App\Models\Alamat;
use App\Models\FasilitasWisata;
use App\Models\Kecamatan;
use App\Models\Kriteria;
use App\Models\NilaiKriteria;
use App\Models\NilaiWisata;
use App\Models\Wisata;
use ArrayObject;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use App\Traits\SmartMetode;

class SmartController extends Controller
{
    use SmartMetode;
    protected $rules, $messages, $page, $wisata, $kriteria;

    public function __construct() {
        $this->rules = array(
            // 'harga' => 'required|numeric',
            // 'diskon' => 'required|numeric|between:0,100',
            // 'nama_wisata' => 'required|string',
            // 'artikel' => 'required|string',
            // 'wisataList__activity' => 'required|string',
            // 'kecamatan' => 'required|string',
            // 'kota' => 'required|string',
            // 'listFasilitas' => 'required',
            // 'inputInformasi.*' => 'required'
        );

        $this->messages = array(
            'required' => ':attribute harus diisi.',
            'numeric' => ':attribute harus diisi.',
            'string' => ':attribute harus diisi.',
            'between' => ':attribute harus di antara :min - :max',
            'min' => ':attribute minimal :value',
            'max' => ':attribute maksimal :value',
            'digits_between' => 'inputan :attribute harus diantara :min - :max',
            'email' => ':attribute tidak valid!',
            'listFasilitas.required' => ':attribute harus dipilih minimal satu fasilitas!',
            'inputKecamatan.required' => 'Harap pilih :attribute!',
            'inputKota.required' => 'Harap pilih :attribute!',
        );

        $this->page = array(
            'kategori' => 'active',
            'pageTitle' => 'Perhitungan Smart',
            'sweetalert' => true,
            'sweetalertSuccess' => true,
            'sweetalertError' => true,
            'sweetalertDelete' => true
        );

        $this->wisata = Wisata::limit(12)->orderBy('created_at', 'desc')->get();
        $this->kriteria = Kriteria::get();
    }

    public function NilaiAkhir(Request $request) {
        $listModel = array(
            'wisata' => $this->wisata,
            'kriteria' => $this->kriteria
        );

        $this->setModel($listModel);

        return $this->getAkhir($request);
    }
}