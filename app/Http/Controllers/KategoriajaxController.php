<?php

namespace App\Http\Controllers;

use App\Kategoriajax;
use Illuminate\Http\Request;

class KategoriajaxController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Kategoriajax::all();
        $response = [
            'success' => true,
            'data' =>  $data,
            'message' => 'Berhasil ditampilkan.'
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
        $data = new Kategoriajax();
        $data->nama = $request->namakategori;
        $data->slug = str_slug ($request->namakategori, '-');
        $data->save();
        $response = [
            'success' => true,
            'data' =>  $data,
            'message' => 'Berhasil ditambahkan.'
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
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function editPost(request $request){
        
        $data = Posts::find ($request->id);
        $data->nama = $request->namakategori;
        $data->slug = str_slug ($request->namakategori, '-');        
        $data->save();
         $response = [
            'success' => true,
            'data' =>  $data,
            'message' => 'Berhasil ditambahkan.'
        ];
        return response()->json($response);
}

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {   $response = [
            'success' => true,
            'data' =>  $data,
            'message' => 'Berhasil ditambahkan.'
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
        $data = Kategoriajax::find($id)->delete($id);
        $response = [
            'success' => true,
            'data' =>  $data,
            'message' => 'Berhasil dihapus.'
        ];
        return response()->json($response, 200);
    }
}
