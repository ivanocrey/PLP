<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Sub_lokasi1;
use App\Sub_lokasi2;
use App\Sub_lokasi3;
use App\Lokasi;

use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\DB;

class LokasiController extends Controller
{
     function index()
    {
        $data = DB::table('lokasi')
        -> leftJoin('sub_lokasi1','lokasi.id_lokasi','=','sub_lokasi1.id_lokasi')
        ->get('judul')->first();
        $data_lokasi = Sub_lokasi1::all();
        //space
        $data1 = DB::table('lokasi')
        -> leftJoin('sub_lokasi2','lokasi.id_lokasi','=','sub_lokasi2.id_lokasi')
        ->get('judul')->first();
        $data_lokasi1 = Sub_lokasi2::all();
        $data2 = DB::table('lokasi')
        -> leftJoin('sub_lokasi3','lokasi.id_lokasi','=','sub_lokasi3.id_lokasi')
        ->get('judul')->first();
        $data_lokasi2 = Sub_lokasi3::all();
        //space
        // $categories = [];
        // $data = [];
        // foreach($keterangan as $ket){
        //     $categories[] = $ket->keterangan;
        // }
        // foreach($nilai as $n){
        //     $data[] = $n->nilai;
        // }
        return view ('lokasi.index',['data_lokasi'=>$data_lokasi,'data_lokasi1'=>$data_lokasi1, 'data_lokasi2'=>$data_lokasi2, 'data'=>$data,'data1'=>$data1,'data2'=>$data2]);
    }
     function create()
    {
        return view('lokasi/sub_lokasi1.create');
    }
     function hasil(Request $request){
        $input = $request->all();
        // echo "<pre>";
        // print_r($input);
        $count= count($input['nilai']);
        for ($i=0; $i <$count ; $i++) {
            echo $input['nilai'][$i].$input['keterangan'][$i];
            echo '<br>';
            $lokasi = new Sub_lokasi1();
            $lokasi -> id_lokasi =$input['id_lokasi'][$i];
            $lokasi ->nilai = $input['nilai'][$i];
            $lokasi ->keterangan = $input['keterangan'][$i];
            $lokasi ->save();
        }

        return Redirect::to('lokasi');
    }
    function edit ($sub_id1  )
    {
        $lokasi = Sub_lokasi1::where('sub_id1', $sub_id1)->first();
        return view('lokasi/sub_lokasi1/edit',['lokasi' => $lokasi]);

    }
    function update (Request $request,$sub_id1)
    {
        $lokasi = Sub_lokasi1::find($sub_id1);
        $lokasi->nilai = $request->nilai;
        $lokasi->keterangan = $request->keterangan;
        $lokasi->save();

        return redirect::to('/lokasi')->with('sukses','Data berhasil di update');
    }
    function delete ($sub_id1)
    {
        $lokasi = \App\Sub_lokasi1::find($sub_id1);
        $lokasi->delete($lokasi);
        return redirect::to('/lokasi')->with('sukses','Data berhasil di hapus');
    }

}
class Lokasidetail {
    public function updatejudul(Request $request,$id_lokasi)
    {
        $data = Lokasi::find($id_lokasi);
        $data->judul = $request->judul;
        $data->save();

        return redirect::to('/lokasi')->with('sukses','Data berhasil di update');
    }
}
