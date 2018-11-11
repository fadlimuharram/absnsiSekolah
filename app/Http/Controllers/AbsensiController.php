<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Kelas;
use App\Guru;
use App\BidangStudi;
use App\JadwalGuru;
use Auth;
use App\Member;

/*
    SELECT * FROM jadwal_guru INNER JOIN guru ON guru.id = jadwal_guru.guru_id 
    INNER JOIN kelas ON kelas.id = jadwal_guru.kelas_id 
    INNER JOIN bidang_studi ON jadwal_guru.bidang_studi_id = bidang_studi.id 
    WHERE jadwal_guru.hari = 'senin' AND kelas.id = 30
*/

class AbsensiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $curr_kelas = Member::where('user_id',Auth::user()->id)->get()[0]->kelas_id;
        
        $current_page = 'absen-member';
        $sekarang = JadwalGuru::select(
                    'jadwal_guru.jam_mulai',
                    'jadwal_guru.jam_berakhir',
                    'jadwal_guru.hari',
                    'guru.nik as nikGuru',
                    'guru.nama as namaGuru',
                    'guru.tlpn as tlpnGuru',
                    'bidang_studi.deskripsi as bidangStudi'
                    )
                    ->join('guru','guru.id','=','jadwal_guru.guru_id')
                    ->join('kelas','kelas.id','=','jadwal_guru.kelas_id')
                    ->join('bidang_studi','bidang_studi.id','=','jadwal_guru.bidang_studi_id')
                    ->where([
                        ['jadwal_guru.hari','=','senin'],
                        ['kelas.id','=',$curr_kelas]
                    ])
                    ->get();
        return view('member.absen', compact('current_page','sekarang'));
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
