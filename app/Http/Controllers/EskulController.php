<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Eskul;

class EskulController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $eskul = Eskul::all();
        $response = [
            'succes' => true,
            'data' => $eskul,
            'message' => 'berhasil'
        ];
        return response()->json($response, 200);
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
        $siswa = new Eskul;
        $siswa->nama = $request->nama;
        $siswa->nama_eskul = $request->nama_eskul;
        $siswa->kelas = $request->kelas;
        $siswa->umur = $request->umur;
        $siswa->sekolah = $request->sekolah;
        $siswa->save();
        $response = [
            'succes' => true,
            'data' => $siswa,
            'message' => 'berhasil'
        ];
        return response()->json($response, 200);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $siswa = Eskul::findOrFail($id);
        $response = [
            'succes' => true,
            'data' => $siswa,
            'message' => 'berhasil'
        ];
        return response()->json($response, 200);
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
        $siswa = Eskul::findOrFail($id);
        $siswa->nama = $request->nama;
        $siswa->nama_eskul = $request->nama_eskul;
        $siswa->kelas = $request->kelas;
        $siswa->umur = $request->umur;
        $siswa->sekolah = $request->sekolah;
        $siswa->save();
        $response = [
            'succes' => true,
            'data' => $siswa,
            'message' => 'berhasil'
        ];
        return response()->json($response, 200);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $siswa = Eskul::findOrFail($id)->delete();
        $response = [
            'succes' => true,
            'data' => $siswa,
            'message' => 'berhasil'
        ];
        return response()->json($response, 200);
    }
}
