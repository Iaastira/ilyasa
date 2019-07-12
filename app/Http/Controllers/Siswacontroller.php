<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Siswa;

class SiswaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index2()
    {

        $siswa = [
            [
                "nama" => "ifan",
                "kelas" => "12 Rpl 2",
                "umur" => 17,
                "hoby" => ['Badminton', 'Sepak_bola', 'Gamers'],
                "jenis_kelamin" => "Laki-laki"
            ],
            [
                "nama" => "ilyoso",
                "kelas" => "12 Rpl 1",
                "umur" => 20,
                "hoby" => ['Beklen', 'Gamers'],
                "jenis_kelamin" => "Laki-laki"
            ],
            [
                "nama" => "harry",
                "kelas" => "12 Rpl 2",
                "umur" => 19,
                "hoby" => ['Beklen', 'voli'],
                "jenis_kelamin" => "Laki-laki"
            ],
            [
                "nama" => "bagas",
                "kelas" => "12 Rpl 2",
                "umur" => 18,
                "hoby" => ['dance', 'tidur'],
                "jenis_kelamin" => "Perempuan"
            ],
            [
                "nama" => "muhaimin",
                "kelas" => "12 Rpl 1",
                "umur" => 17,
                "hoby" => ['Sepak_bola', 'Gamers'],
                "jenis_kelamin" => "Laki-laki"
            ]
        ];
        return $siswa;
    }
    public function index()
    {
        $data = Siswa::all();
        $response = [
            'succes' => true,
            'data' => $data,
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
        $siswa = new Siswa;
        $siswa->nama = $request->nama;
        $siswa->kelas = $request->kelas;
        $siswa->umur = $request->umur;
        $siswa->hobi = $request->hobi;
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
        $siswa = Siswa::findOrFail($id);
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
        $siswa = Siswa::findOrFail($id);
        $siswa->nama = $request->nama;
        $siswa->kelas = $request->kelas;
        $siswa->umur = $request->umur;
        $siswa->hobi = $request->hobi;
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
        $siswa = Siswa::findOrFail($id)->delete();
        $response = [
            'succes' => true,
            'data' => $siswa,
            'message' => 'berhasil'
        ];
        return response()->json($response, 200);
    }
}
