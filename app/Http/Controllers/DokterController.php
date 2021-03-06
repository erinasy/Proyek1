<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Dokter;

class DokterController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $dokters = Dokter::all();
        return view('dokter.index',['dokter'=>$dokters]);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dokter.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $dokter = new Dokter;

        if($request->file('photo')){
            $image_name = $request->file('photo')->store('images','public');
        }

        $dokter->nid = $request->nid;
        $dokter->name = $request->name;
        $dokter->jenis_kelamin= $request->jenis_kelamin;
        $dokter->alamat_dokter = $request->alamat_dokter;
        $dokter->nomor_telepon = $request->nomor_telepon;
        $dokter->email = $request->email;
        $dokter->spesialis = $request->spesialis;
        $dokter->photo = $image_name;

        $dokter->save();
         
         // if true, redirect to index
        return redirect()->route('dokter.index')->with('success', 'Add data success!');
        //add data
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($nid)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($nid)
    {
        $dokters = Dokter::find($nid);
        return view('dokter.edit',['dokter'=>$dokters]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $nid)
    {
            $dokters = Dokter::find($nid);
            $dokters->nid = $request->nid;
            $dokters->name = $request->name;
            $dokters->jenis_kelamin = $request->jenis_kelamin;
            $dokters->alamat_dokter = $request->alamat_dokter;
            $dokters->nomor_telepon = $request->nomor_telepon;
            $dokters->email = $request->email;
            $dokters->spesialis = $request->spesialis;
            if($request->file('photo')){
                $image_name = $request->file('photo')->store('images','public');
                if($dokters->photo && file_exists(storage_path('app/public/' . $dokters->photo))){
                    \Storage::delete('public/'.$dokter->photo);
                }
                    $image_name = $request->file('photo')->store('images', 'public');
                    $dokters->photo = $image_name;
            }
            $dokters->save();
            return redirect()->route('dokter.index');

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
