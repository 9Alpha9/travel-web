<?php

namespace App\Http\Controllers;

use App\Models\TipeWahana;
use App\Models\WahanaWisata;
use Illuminate\Http\Request;

class KategoriController extends Controller
{
    //
    protected $rules, $messages, $page;

    public function __construct() {
        $this->rules = array(
            'harga' => 'required|numeric',
            'diskon' => 'required|numeric|between:0,100',
            'nama_wisata' => 'required|string',
            'artikel' => 'required|string',
            'wisataList__activity' => 'required|string',
            'kecamatan' => 'required|string',
            'kota' => 'required|string',
            'listFasilitas' => 'required',
            'inputInformasi.*' => 'required'
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
            'pageTitle' => 'Kategori',
            'sweetalert' => true,
            'sweetalertSuccess' => true,
            'sweetalertError' => true,
            'sweetalertDelete' => true
        );
    }

    public function index(){
        $tipe = TipeWahana::orderBy('created_at', 'desc')->get();

        $this->page['tableTipe'] = $tipe;

        return view('dashboard.components.kategoriDash.kategori')->with($this->page);
    }

    // public function index(){
    //     $wisata = Wisata::get();
    //     $idProvince = 35;
    //     $kota = Kota::withCount('kecamatan')->where('province_id', $idProvince)->get();
    //     $user = User::where('user_type', 'Admin')->get();

    //     $this->page['tableWisata'] = $wisata;
    //     $this->page['tableKota'] = $kota;
    //     $this->page['tablePengelolah'] = $user;

    //     return view('dashboard.pages.dashboard')->with($this->page);
    // }

    public function store(Request $request){
        try{
            foreach($request->inputNama as $key => $value){
                $tipe = TipeWahana::create([
                    'nama_tipe_wahana' => $value,
                    'keterangan' => $request->inputKeterangan[$key],
                    'created_at' => date('Y-m-d H:i:s'),
                    'updated_at' => date('Y-m-d H:i:s')
                ]);
            }
            return redirect()->route('kategori.index')->with(['success' => 'Data Berhasil Disimpan!']);
        } catch(\Exception $e){
            return redirect()->back()->withErrors($e);
        }
    }

    public function update(Request $request, $id){
        try {
            $tipe = TipeWahana::where('id_tipe_wahana', $id)->update([
                'nama_tipe_wahana' => $request->inputedNama,
                'keterangan' => $request->inputedKeterangan,
                'updated_at' => date('Y-m-d H:i:s')
            ]);
            return redirect()->route('kategori.index')->with(['success' => 'Data Berhasil Dirubah!']);
        } catch(\Exception $e){
            return redirect()->back()->withErrors($e);
        }
    }

    public function destroy($id){
        try{
            $checkTipe = WahanaWisata::where('id_tipe_wahana', $id)->get();
            if ($checkTipe->count() > 0) {
                $wahana = WahanaWisata::where('id_tipe_wahana', $id)->delete();
            }

            $tipe = TipeWahana::where('id_tipe_wahana', $id)->delete();

            return redirect()->route('kategori.index')->with(['success' => 'Data Berhasil Dihapus!']);
        } catch(\Exception $e){
            return redirect()->back()->withErrors($e);
        }
    }

}
