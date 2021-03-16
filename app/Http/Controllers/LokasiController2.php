<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Http\Request;
use App\Sub_lokasi2;
class LokasiController2 extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('lokasi/sub_lokasi2.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function hasil(Request $request)
    {
        $input = $request->all();
        // echo "<pre>";
        // print_r($input);
        $count= count($input['nilai_1']);
        for ($i=0; $i <$count ; $i++) {
            echo $input['nilai_1'][$i].$input['keterangan_1'][$i];
            echo '<br>';
            $lokasi1 = new Sub_lokasi2();
            $lokasi1 -> id_lokasi =$input['id_lokasi'][$i];
            $lokasi1 -> nilai_1 = $input['nilai_1'][$i];
            $lokasi1 -> keterangan_1 = $input['keterangan_1'][$i];
            $lokasi1 ->save();
        }
        return Redirect::to('lokasi');
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
    public function edit($sub_id2)
    {
        $lokasi1 = Sub_lokasi2::where('sub_id2', $sub_id2)->first();
        return view('lokasi/sub_lokasi2/edit',['lokasi1' => $lokasi1]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $sub_id2)
    {
        $lokasi1 = Sub_lokasi2::find($sub_id2);
        $lokasi1->nilai_1 = $request->nilai_1;
        $lokasi1->keterangan_1 = $request->keterangan_1;
        $lokasi1->save();

        return redirect::to('/lokasi')->with('sukses','Data berhasil di update');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function delete($sub_id2)
    {
        $lokasi1 = \App\Sub_lokasi2::find($sub_id2);
        $lokasi1->delete($lokasi1);
        return redirect::to('/lokasi')->with('sukses','Data berhasil di hapus');
    }
}
