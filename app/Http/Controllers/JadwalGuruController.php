<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Guru;
use \App\Kelas;
use \App\BidangStudi;
use \App\JadwalGuru;

class JadwalGuruController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $current_page = 'jadwalguru';
        $guru = Guru::all();
        $kelas = Kelas::all();
        $bidangStudi = BidangStudi::all();
        
        return view('admin.jadwalGuru', compact('guru','kelas','bidangStudi','current_page'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'jammulai'=>'required',
            'jamakhir'=>'required',
            'hari'=>'required'
        ]);
        
        JadwalGuru::create([
            'jam_mulai'=> $request->jammulai,
            'jam_berakhir'=> $request->jamakhir,
            'hari'=> $request->hari,
            'bidang_studi_id'=> $request->bidangstudi,
            'guru_id'=>$request->guru,
            'kelas_id'=>$request->kelas
        ]);
        return redirect(route('jadwalguru.index'))->with('success','guru berhasil di tambahkan');
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
