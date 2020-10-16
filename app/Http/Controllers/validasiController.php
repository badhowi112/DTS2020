<?php

namespace App\Http\Controllers;
use DB;
use Illuminate\Http\Request;
use Phpml\Classification\NaiveBayes;
use Phpml\SupportVectorMachine\Kernel;
use App\Models\ListData;
class validasiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $data_warga = ListData::all();
        $tombol = DB::select('select count(verifikasi) as hasil from listdata where verifikasi = 0');
        return view('validasi.index',compact('data_warga','tombol'));
    }
    public function Data(){
        $data_1= DB::select('select id,nik,kecamatan,desa,alamat,nama,
        kondisi_atap,kondisi_lantai,kondisi_dinding,penghasilan,keterangan 
        from listdata where verifikasi = ?',[1]);
        $data_0= DB::select('select id,nik,kecamatan,desa,alamat,nama,
        kondisi_atap,kondisi_lantai,kondisi_dinding,penghasilan,keterangan 
        from listdata where verifikasi = ?',[0]);
    //bagian variabel penyimpanan array
    $samples = array(array());
    $labels = array();
    $i = 0;
    $data_id = array();
    //karena nilai harus berada di array dalam array
    foreach ($data_1 as $data) {
        $data = get_object_vars($data);
        $data_id[$i] = $data['id'];
        $samples[$i][0] = $data['nik'];
        $samples[$i][1] = $data['kecamatan'];
        $samples[$i][2] = $data['desa'];
        $samples[$i][3] = $data['alamat'];
        $samples[$i][4] = $data['nama'];
        $samples[$i][5] = $data['kondisi_atap'];
        $samples[$i][6] = $data['kondisi_lantai'];
        $samples[$i][7] = $data['kondisi_dinding'];
        $samples[$i][8] = $data['penghasilan'];
        $labels[$i] = $data["keterangan"];
        $i++;
        }
    $samples_1 = array(array());
    $labels_1 = array();
    $y = 0;
    $data_id_1 = array();
         //classifier bagian user yg belum verifikasi
         foreach ($data_0 as $data1) {
            $data1 = get_object_vars($data1);
            $data_id_1[$y] = $data1['id'];
            $samples_1[$y][0] = $data1['nik'];
            $samples_1[$y][1] = $data1['kecamatan'];
            $samples_1[$y][2] = $data1['desa'];
            $samples_1[$y][3] = $data1['alamat'];
            $samples_1[$y][4] = $data1['nama'];
            $samples_1[$y][5] = $data1['kondisi_atap'];
            $samples_1[$y][6] = $data1['kondisi_lantai'];
            $samples_1[$y][7] = $data1['kondisi_dinding'];
            $samples_1[$y][8] = $data1['penghasilan'];
            $labels_1[$y] = $data1["keterangan"];
         }
    $classifier = new NaiveBayes();
    $classifier->train($samples,$labels);
    $array_hasil = $classifier->predict($samples_1);
    // dd($array_hasil);
    //update database
    for($z=0; $z<sizeof($data_id_1);$z++ ){
        $array_hasil_predict = DB::update('update listdata set verifikasi = 1 where listdata.id = ?', [$data_id_1[$z]]);
    
          //kurang keterangan
        // $array_keterangan = DB::update('update data_news_2 set keterangan = ? where data_news_2.id = ?', [$array_hasil[$z],$data_id_1[$z]]);
        $array_saran = DB::update('update listdata set keterangan = ? where listdata.id = ?', [$array_hasil[$z],$data_id_1[$z]]);
    }
    return redirect('/validasi');
}
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}