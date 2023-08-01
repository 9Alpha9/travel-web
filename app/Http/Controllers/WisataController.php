<?php

namespace App\Http\Controllers;

use App\Models\FasilitasWisata;
use App\Models\GambarWisata;
use App\Models\Informasi;
use App\Models\KategoriFasilitas;
use App\Models\KategoriWisata;
use App\Models\Kecamatan;
use App\Models\Kota;
use App\Models\User;
use App\Models\Wisata;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class WisataController extends Controller
{
    //
    public function index(){
        if(Auth::user()->user_type == "Admin"){
            $wisata = Wisata::where('id_pengelolah', Auth::user()->id_user)->get();
        }
        else{
            $wisata = Wisata::get();
        }

        return view('dashboard.pages.listwisata')->with(['wisata' => 'active', 'pageTitle' => 'Wisata', 'tableWisata' => $wisata]);
    }

    public function create(){
        $fasilitas = KategoriFasilitas::get();
        $kategori = KategoriWisata::get();
        $kota = Kota::where('province_id', '35')->get();
        $kecamatan = Kecamatan::get();
        return view('dashboard.pages.wisataComponent')->with(['wisata' => 'active', 'pageTitle' => 'Wisata', 'fasilitas' => $fasilitas, 'kota' => $kota, 'kecamatan' => $kecamatan, 'kategori' => $kategori]);
    }

    public function getKecamatan(Request $request){
        $kecamatan = Kecamatan::where('regency_id', $request->kota)->get();
        return response()->json(['kecamatan' => $kecamatan->all()], 200);
    }

    public function show($id){

    }

    public function edit($id){

    }

    public function store(Request $request){
        // dd(asset('dashboard/gallery-wisata/'));
        try {
            $wisata = Wisata::create([
                "id_pengelolah" => Auth::user()->id_user,
                "harga" => $request->inputHarga,
                "diskon" => $request->inputDiskon,
                "nama_wisata" => $request->inputNama,
                "artikel" => $request->artikel,
                "id_kategori_wisata" => $request->wisataList__activity,
                "id_kecamatan" => $request->inputKecamatan,
                "created_at" => date('Y-m-d H:i:s'),
                "updated_at" => date('Y-m-d H:i:s')
            ]);

            foreach (json_decode($request->listFasilitas) as $key => $value) {
                # code...
                $fasilitas = FasilitasWisata::create([
                    "id_wisata" => $wisata->id_wisata,
                    "id_kategori_fasilitas" => $value,
                    "created_at" => date('Y-m-d H:i:s'),
                    "updated_at" => date('Y-m-d H:i:s')
                ]);
            }

            foreach (json_decode($request->inputImages) as $key => $value) {
                # code...
                $image = base64_decode($value->img);

                $filename = 'wisata_' . str_replace(' ', '_', $wisata->nama_wisata) . '_' . str_replace(' ', '_', $value->name);

                if (!file_exists(base_path('public/gallery-wisata/' . str_replace(' ', '_', $wisata->nama_wisata)))) {
                    mkdir(base_path('public/gallery-wisata/' . str_replace(' ', '_', $wisata->nama_wisata)), 0777, true);
                }

                if($fileImage = file_put_contents(base_path('public/gallery-wisata/' . str_replace(' ', '_', $wisata->nama_wisata) . '/' . $filename), $image) !== false){
                    // $fileImage->move(base_path('public/dashboard/gallery-wisata/'));
                    $gambar = GambarWisata::create([
                        "id_wisata" => $wisata->id_wisata,
                        "nama_gambar" => $filename,
                        "keterangan_gambar" => "Gambar " . $value->name . " dari Wisata " . $wisata->nama_wisata,
                        "created_at" => date('Y-m-d H:i:s'),
                        "updated_at" => date('Y-m-d H:i:s')
                    ]);
                }
            }

            foreach ($request->inputInformasi as $key => $value) {
                # code...
                if(!empty($value)){
                    $informasi = Informasi::create([
                        "id_wisata" => $wisata->id_wisata,
                        "informasi" => $value,
                        "created_at" => date('Y-m-d H:i:s'),
                        "updated_at" => date('Y-m-d H:i:s')
                    ]);
                }
            }
        } catch (\Exception $e) {
            dd($e);
        }
    }

    public function update(Request $request, $id){

    }

    public function destroy($id){

    }

    public function request(Request $request){
        try{
            if(empty($request->inputPengajuan)){
                $user = User::where('id_user', Auth::user()->id_user)->update([
                    'pengajuan' => '1',
                    'tanggal_pengajuan' => date('Y-m-d H:i:s')
                ]);
            }
            elseif(!empty($request->inputPengajuan)){
                $user = User::where('id_user', Auth::user()->id_user)->update([
                    'status' => 'ulang',
                    'tanggal_pengajuan' => date('Y-m-d H:i:s')
                ]);
            }
            return redirect()->route('wisata.requestView')->with(['success' => 'Berhasil diajukan.']);
        }
        catch(\Exception $e){
            return redirect()->back()->withErrors($e);
        }
    }

    public function requestView(){
        $user = User::where('pengajuan', true)->orderBy('tanggal_pengajuan', 'desc')->get();
        $tolak = User::where('pengajuan', true)->where('status', 'tolak')->orWhere('status', 'ulang')->get();
        return view('dashboard.components.reviewVer')->with(['request' => 'active', 'pageTitle' => 'Verifikasi Rules', 'pengajuan' => 'active', 'user' => $user, 'tolak' => $tolak]);
    }

    public function requestReview(Request $request){
        try{

            $data['status'] = strtolower($request->statusPengajuan);
            $data['alasan'] = strtolower($request->alasanPengajuan);
            $data['tanggal_pengajuan'] = date('Y-m-d H:i:s');
            if($request->statusPengajuan == "terima"){
                $data['user_type'] = "Admin";
            }
            else{
                $data['user_type'] = "User";
            }

            $user = User::where('id_user', $request->idUser)->update($data);

            return redirect()->route('wisata.requestView')->with(['success' => 'Pengajuan berhasil diproses.']);
        } catch(\Exception $e){
            return redirect()->back()->withErrors($e);
        }
    }
}