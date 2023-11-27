<?php

namespace App\Http\Controllers;

use App\Models\KategoriFasilitas;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class FasilitasController extends Controller
{
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
            'fasilitas' => 'active',
            'pageTitle' => 'Fasilitas',
            'sweetalert' => true,
            'sweetalertSuccess' => true,
            'sweetalertError' => true,
            'sweetalertDelete' => true
        );
    }

    public function validator($request)
    {
        $validate = Validator::make($request->all(), [
            'inputNama' => 'required',
            'inputKeterangan' => 'required'
        ]);

        if($validate->fails()){
            return redirect()->back()->withErrors($validate)->withInput();
        } else {
            return true;
        }

    }

    public function index(){
        $fasilitas = KategoriFasilitas::orderBy('created_at', 'desc')->get();

        $this->page['tableFasilitas'] = $fasilitas;

        return view('dashboard.pages.fasilitas')->with($this->page);
    }

    public function create(){

    }

    public function show($id){

    }

    public function edit($id){

    }

    public function store(Request $request){
        if($this->validator($request)){
            try {
                // dd($request->inputNama);
                //code...
                $fasilitas = KategoriFasilitas::create([
                    'kategori_fasilitas' => $request->inputNama,
                    'keterangan_fasilitas' => $request->inputKeterangan,
                    'created_at' => date('Y-m-d H:i:s'),
                    'updated_at' => date('Y-m-d H:i:s')
                ]);

                return redirect()->route('fasilitas.index')->with(['success' => 'Fasilitas Berhasil Ditambahkan!']);
            } catch (\Throwable $th) {
                //throw $th;
                dd($th);
            }
        }
    }

    public function update(Request $request, $id){

        try {
            //code...
            $fasilitas = KategoriFasilitas::where('id_kategori_fasilitas', $id)->update([
                'kategori_fasilitas' => $request->inputNama,
                'keterangan_fasilitas' => $request->inputKeterangan,
                'updated_at' => date('Y-m-d H:i:s')
            ]);

            return redirect()->route('fasilitas.index')->with(['success' => 'Fasilitas Berhasil Diupdate!']);
        } catch (\Throwable $th) {
            throw $th;
        }
    }

    public function destroy($id){
        KategoriFasilitas::where('id_kategori_fasilitas', $id)->delete();
        return redirect()->route('fasilitas.index')->with(['success' => 'Fasilitas Berhasil Dihapus!']);
    }

}
