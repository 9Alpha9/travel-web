<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use App\Models\Aksesbilitas;
use App\Models\KategoriFasilitas;
use App\Models\KategoriWisata;
use App\Models\Kota;
use App\Models\Kriteria;
use App\Models\Wisata;
use Illuminate\Http\Request;
use App\Traits\SmartMetode;

//TAMPILAN DITMAPILKAN 8 AJA
class HomePagesController extends Controller
{
    use SmartMetode;
    protected $rules, $messages, $page, $wisata, $kriteria;

    public function __construct()
    {
        $this->wisata = Wisata::limit(12)->orderBy('created_at', 'desc');
        $this->kriteria = Kriteria::get();

    }
    public function index() {
        return view('components.homepages')->with(['homepages']);
    }
    public function landingPage() {
        // $wisata = Wisata::with('GambarWisata', function ($query){
        //     $query->orderBy('created_at', 'desc');
        // })->orderBy('created_at', 'desc')->get();
        $wisata = Wisata::with('GambarWisata')->orderBy('created_at', 'desc')->get();
        $tableKategori = KategoriWisata::orderBy('created_at', 'asc')->get();
        $tableKota = Kota::orderBy('created_at', 'asc')->where('province_id', 35)->orderBy('name', 'asc')->get();
        $tableAksesbilitas = Aksesbilitas::withCount('wisata')->get();
        $tableFasilitas = KategoriFasilitas::withCount('fasilitaswisata')->get();
        // dd($tableFasilitas);
        $return = array(
            'home' => 'active',
            'pageTitle' => 'Travel',
            'wisata' => $wisata,
            'tableKategori' => $tableKategori,
            'tableKota' => $tableKota,
            'tableAksesbilitas' => $tableAksesbilitas,
            'tableFasilitas' => $tableFasilitas,
        );
        return view('components/landingpages/home')->with($return);
    }

    public function filterPageRedirect() {
        return redirect()->route('landingpage');
    }

    public function filterPage(Request $request){
        if (strlen($request->kategori) > 0) {
            $this->wisata->where('id_kategori_wisata', $request->kategori);
        }
        if (strlen($request->kota) > 0) {
            $this->wisata->where('id_kota', $request->kota);
        }
        if ($request->minHarga > 0) {
            $this->wisata->where('harga >=', $request->minHarga);
        }
        if ($request->maxHarga > 0) {
            $this->wisata->where('harga <=', $request->maxHarga);
        }

        $listModel = array(
            'wisata' => $this->wisata->get(),
            'kriteria' => $this->kriteria
        );

        $this->setModel($listModel);

        $nilai_akhir = $this->getAkhir($request);
        $id_wisata = array_keys((array)$nilai_akhir['sorted_akhir']);
        $id_wisata = array_unique($id_wisata);
        foreach ($id_wisata as $key => $value) {
            $id_wisata[$key] = preg_replace('/"/i', '', $value);
        }

        if (count($id_wisata) == 0) {
            $id_wisata = array(0);
        }

        $sorted_wisata = Wisata::whereIn('id_wisata', $id_wisata)
        ->orderByRaw('FIELD(id_wisata, ' . implode(',', $id_wisata) . ')')
        ->get();

        $view = view('components.template.filteredList', ['filterpage' => 'active', 'tableWisata' => $sorted_wisata])->render();

        return response()->json(['view' => $view]);

        // return view('components.pages.viewPages.filterPages')->with(['filterpage' => 'active', 'tableWisata' => $sorted_wisata]);
    }
}
