<?php

namespace App\Http\Controllers;

use App\Models\Aksesbilitas;
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
use Illuminate\Support\Facades\Validator;

class WisataController extends Controller
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
            'wisata' => 'active',
            'pageTitle' => 'Wisata',
            'sweetalert' => true,
            'sweetalertSuccess' => true,
            'sweetalertError' => true,
            'sweetalertDelete' => true
        );
    }

    public function index(){
        if(Auth::user()->user_type == "Admin"){
            $wisata = Wisata::where('id_pengelolah', Auth::user()->id_user)->orderBy('created_at', 'asc')->get();
        }
        else if(Auth::user()->user_type == "superAdmin"){
            $wisata = Wisata::orderBy('created_at', 'desc')->get();
        }
        $this->page['tableWisata'] = $wisata;
        return view('dashboard.pages.listwisata')->with($this->page);
    }

    public function create(){
        $fasilitas = KategoriFasilitas::get();
        $kategori = KategoriWisata::get();
        $aksesbilitas = Aksesbilitas::get();
        $kota = Kota::where('province_id', '35')->get();

        $this->page['tableFasilitas'] = $fasilitas;
        $this->page['tableKota'] = $kota;
        $this->page['tableKategori'] = $kategori;
        $this->page['tableAksesbilitas'] = $aksesbilitas;

        return view('dashboard.pages.wisataComponent')->with($this->page);
    }

    public function getKecamatan(Request $request){
        $kecamatan = Kecamatan::where('regency_id', $request->kota)->get();
        return response()->json(['kecamatan' => $kecamatan->all()], 200);
    }

    public function show($id){

    }

    public function edit($id){
        $wisata = Wisata::where('id_wisata', $id)->with('gambarwisata', 'fasilitaswisata', 'informasi')->get();
        $kota = Kota::where('province_id', '35')->get();
        $fasilitas = KategoriFasilitas::get();
        $kategori = KategoriWisata::get();
        $aksesbilitas = Aksesbilitas::get();

        $this->page['tableKategori'] = $kategori;
        $this->page['tableFasilitas'] = $fasilitas;
        $this->page['tableKota'] = $kota;
        $this->page['tableWisata'] = $wisata;
        $this->page['tableAksesbilitas'] = $aksesbilitas;

        return view('dashboard.pages.wisataComponent')->with($this->page);
    }

    public function store(Request $request){
        // $validator = Validator::make({
        //     'inputDiskon' ->
        // });
        $this->page['sweetalertError'] = false;
        // dd($this->page);
        $validationResponse = $this->validationForm($request, $this->rules, $this->messages);
        if($validationResponse) {
            try {
                $wisata = Wisata::create([
                    "id_pengelolah" => Auth::user()->id_user,
                    "id_aksesbilitas" => $request->aksesbilitas,
                    "harga" => str_replace('.','',$request->harga),
                    "diskon" => $request->diskon,
                    "nama_wisata" => $request->nama_wisata,
                    "artikel" => $request->artikel,
                    "id_kategori_wisata" => $request->wisataList__activity,
                    "id_kota" => $request->kota,
                    "id_kecamatan" => $request->kecamatan,
                    "created_at" => date('Y-m-d H:i:s'),
                    "updated_at" => date('Y-m-d H:i:s')
                ]);

                // jika kosong maka dilewati.
                if (!is_null($request->listFasilitas)) {
                    foreach (json_decode($request->listFasilitas) as $key => $value) {
                        $fasilitas = FasilitasWisata::create([
                            "id_wisata" => $wisata->id_wisata,
                            "id_kategori_fasilitas" => $value,
                            "created_at" => date('Y-m-d H:i:s'),
                            "updated_at" => date('Y-m-d H:i:s')
                        ]);
                    }
                }

                if (!is_null($request->images)) {
                    foreach (json_decode($request->images) as $key => $value) {
                        # code...
                        $filename = 'wisata_' . str_replace(' ', '_', $wisata->nama_wisata) . '_' . str_replace(' ', '_', $value->name);

                        if (!file_exists(base_path('public/gallery-wisata/' . str_replace(' ', '_', $wisata->nama_wisata)))) {
                            mkdir(base_path('public/gallery-wisata/' . str_replace(' ', '_', $wisata->nama_wisata)), 0777, true);
                        }

                        if($fileImage = file_put_contents(base_path('public/gallery-wisata/' . str_replace(' ', '_', $wisata->nama_wisata) . '/' . $filename), file_get_contents($value->img)) !== false){
                            $gambar = GambarWisata::create([
                                "id_wisata" => $wisata->id_wisata,
                                "nama_gambar" => $filename,
                                "keterangan_gambar" => "Gambar " . $value->name . " dari Wisata " . $wisata->nama_wisata,
                                "created_at" => date('Y-m-d H:i:s'),
                                "updated_at" => date('Y-m-d H:i:s')
                            ]);
                        }
                    }
                }

                if (!is_null($request->inputInformasi)) {
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
                }

                return redirect()->route('wisata.index')->with(['success' => 'Data Berhasil Disimpan!']);
            } catch (\Exception $e) {
                dd($e);
            }
        } else {
            return redirect()->back()->withErrors($validationResponse)->withInput();
        }
    }

    public function update(Request $request, $id){

    }

    public function destroy($id){
        try{
            $checkInformasi = Informasi::where('id_wisata', $id)->get();
            if($checkInformasi->count() > 0){
                $informasi = Informasi::where('id_wisata', $id)->delete();
            }
            $checkGambar = GambarWisata::where('id_wisata', $id)->get();
            if($checkGambar->count() > 0){
                $gambar = GambarWisata::where('id_wisata', $id)->delete();
            }
            $checkFasilitas = FasilitasWisata::where('id_wisata', $id)->get();
            if($checkFasilitas->count() > 0){
                $fasilitas = FasilitasWisata::where('id_wisata', $id)->delete();
            }
            $wisata = Wisata::find($id)->delete();
            return redirect()->route('wisata.index')->with(['success' => 'Data Berhasil Dihapus!']);
        } catch (\Exception $e){
            dd($e);
        }
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
        // return view('dashboard.components.reviewVer')->with(['request' => 'active', 'pageTitle' => 'Verifikasi Rules', 'pengajuan' => 'active', 'user' => $user, 'tolak' => $tolak]);
        $this->page['request'] = 'active';
        $this->page['pageTitle'] = 'Verifikasi Rules';
        $this->page['pengajuan'] = 'active';
        $this->page['tableUser'] = $user;
        $this->page['tableTolak'] = $tolak;
        unset($this->page['wisata']);

        return view('dashboard.components.reviewVer')->with($this->page);
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

    public function validationForm($input, $rules, $messages = null){
        if ($messages == null) {
            $validator = Validator::make($input->all(), $rules);
        } else {
            $validator = Validator::make($input->all(), $rules, $messages);
        }
        if ($validator->fails()) {
            $messages = $validator->errors();
            return $messages;
        } else {
            return true;
        }
    }
}