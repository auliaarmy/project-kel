<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\AbsenDaring;


class RekapAbsenController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $absen = AbsenDaring::all();
        return view ('rekap.index', compact('absen'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('rekap.create');
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
            'siswa_id' => 'required',
            'kelas_id' => 'required',
            'kehadiran' => 'required',
            'jadwal_id' => 'required',
        ]);

        $absen = AbsenDaring::create([
            'siswa_id' => $request->siswa_id,
            'kelas_id' => $request->kelas_id,
            'pembahasan' => $request->pembahasan,
            'kehadiran' => $request->kehadiran,
            'jadwal_id' => $request->jadwal_id,
        ]);
         
        /// redirect jika sukses menyimpan data
        return redirect()->route('dashboard')->with('success', 'Anda Sudah Absen Hari Ini.');
        
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
