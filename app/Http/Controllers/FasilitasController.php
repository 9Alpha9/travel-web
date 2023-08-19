<?php

namespace App\Http\Controllers;

use App\Models\KategoriFasilitas;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class FasilitasController extends Controller
{
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
        $fasilitas = KategoriFasilitas::get();

        return view('dashboard.pages.fasilitas')->with(['fasilitas' => 'active', 'pageTitle' => 'Fasilitas', 'tableFasilitas' => $fasilitas]);
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