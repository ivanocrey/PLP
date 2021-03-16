<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Http\Request;
use App\Sub_lokasi3;
class LokasiController3 extends Controller
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
        return view('lokasi/sub_lokasi3.create');
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
    public function hasil(Request $request)
    {
        $input = $request->all();
        // echo "<pre>";
        // print_r($input);
        $count= count($input['nilai_2']);
        for ($i=0; $i <$count ; $i++) {
            echo $input['nilai_2'][$i].$input['keterangan_2'][$i];
            echo '<br>';
            $lokasi2 = new Sub_lokasi3();
            $lokasi2 -> id_lokasi =$input['id_lokasi'][$i];
            $lokasi2 -> nilai_2 = $input['nilai_2'][$i];
            $lokasi2 -> keterangan_2 = $input['keterangan_2'][$i];
            $lokasi2 ->save();
        }
        return Redirect::to('lokasi');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($sub_id3)
    {
        $lokasi2 = Sub_lokasi3::where('sub_id3', $sub_id3)->first();
        return view('lokasi/sub_lokasi3/edit',['lokasi2' => $lokasi2]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $sub_id3)
    {
        $lokasi2 = Sub_lokasi3::find($sub_id3);
        $lokasi2->nilai_2 = $request->nilai_2;
        $lokasi2->keterangan_2 = $request->keterangan_2;
        $lokasi2->save();

        return redirect::to('/lokasi')->with('sukses','Data berhasil di update');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function delete($sub_id3)
    {
        $lokasi2 = \App\Sub_lokasi3::find($sub_id3);
        $lokasi2->delete($lokasi2);
        return redirect::to('/lokasi')->with('sukses','Data berhasil di hapus');
    }
}
