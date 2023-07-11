<?php

namespace App\Http\Controllers;

use App\Models\KategoriFasilitas;
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
        $kota = Kota::where('province_id', '35')->get();
        $kecamatan = Kecamatan::get();
        return view('dashboard.pages.wisataComponent')->with(['wisata' => 'active', 'pageTitle' => 'Wisata', 'fasilitas' => $fasilitas, 'kota' => $kota, 'kecamatan' => $kecamatan]);
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
        dd($request);
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
