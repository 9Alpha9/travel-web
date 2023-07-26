<?php

namespace App\Http\Controllers;

use App\Models\KategoriWisata;
use Illuminate\Http\Request;

class KategoriController extends Controller
{
    //
    public function index(){
        $kategori = KategoriWisata::get();
        return view('dashboard.components.kategoriDash.kategori')->with(['pageTitle' => 'Kategori Wisata', 'kategori' => 'active', 'dbKategori' => $kategori]);
    }

    public function store(Request $request){
        try{
            foreach($request->inputNama as $row){
                $kategori = KategoriWisata::create([
                    'nama_kategori_wisata' => $row,
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
            $kategori = KategoriWisata::where('id_kategori_wisata', $id)->update([
                'nama_kategori_wisata' => $request->inputedNama,
                'updated_at' => date('Y-m-d H:i:s')
            ]);
            return redirect()->route('kategori.index')->with(['success' => 'Data Berhasil Dirubah!']);
        } catch(\Exception $e){
            return redirect()->back()->withErrors($e);
        }
    }

    public function destroy($id){
        try{
            $kategori = KategoriWisata::where('id_kategori_wisata', $id)->delete();
            return redirect()->route('kategori.index')->with(['success' => 'Data Berhasil Dihapus!']);
        } catch(\Exception $e){
            return redirect()->back()->withErrors($e);
        }
    }
}
