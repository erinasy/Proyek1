<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\PolaMakan;

class PolaMakanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pola_makan = PolaMakan::all();
        return view('gizi.index',['polaMakan'=>$pola_makan]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('gizi.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $pola_makan = new PolaMakan;

        if($request->file('photo')){
            $image_name = $request->file('photo')->store('images','public');
        }
        $pola_makan->id_polaMakan = $request->id_polaMakan;
        $pola_makan->nama_makanan = $request->nama_makanan;
        $pola_makan->jumlah_kalori = $request->jumlah_kalori;
        $pola_makan->harga = $request->harga;
        $pola_makan->keterangan = $request->keterangan;
        $pola_makan->photo = $image_name;

        $pola_makan->save();
         
         // if true, redirect to index
        return redirect()->route('gizi.index')->with('success', 'Add data success!');
        //add data
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
    public function edit($id_polaMakan)
    {
        $pola_makan= PolaMakan::find($id_polaMakan);
        return view('gizi.edit',['polaMakan'=>$pola_makan]);

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id_polaMakan)
    {
        $pola_makan = PolaMakan::find($id_polaMakan);
        $pola_makan->id_polaMakan = $request->id_polaMakan;
        $pola_makan->nama_makanan = $request->nama_makanan;
        $pola_makan->jumlah_kalori = $request->jumlah_kalori;
        $pola_makan->harga = $request->harga;
        $pola_makan->keterangan = $request->keterangan;
            if($request->file('photo')){
                $image_name = $request->file('photo')->store('images','public');
                if($pola_makan->photo && file_exists(storage_path('app/public/' . $pola_makan->photo))){
                    \Storage::delete('public/'.$pola_makan->photo);
                }
                    $image_name = $request->file('photo')->store('images', 'public');
                    $pola_makan->photo = $image_name;
            }
            $pola_makan->save();
            return redirect()->route('gizi.index');
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
