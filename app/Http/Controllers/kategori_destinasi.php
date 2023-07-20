<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\DestinasiModel;
use App\Models\Kategori_DestinasiModel;
use App\Http\Requests\Kategori_DestinasiRequest;
use File;

class kategori_destinasi extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __index()
    {
        $items = Kategori_DestinasiModel::with('RelatiDestinasion')->get();

        return view('pages.kategori_destinasi.index')->with([
            'items' => $items
        ]);
    }
     /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $wst = DestinasiModel::all();
        return view('pages.kategori_destinasi.create')->with([
            'wst' => $wst
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Kategori_DestinasiRequest $request)
    {
        $data = $request->all();
        
        $nama_url_foto = $request->file('url_foto')->getClientOriginalName();
        $url_foto = $request->file('url_foto')->move('uploads/foto-destinasi', $nama_url_foto);
        $data['url_foto'] = $nama_url_foto;


        Kategori_DestinasiModel::create($data);
        
        toast('Berhasil Ditambah','success');
        return redirect()->route('galeri.index');
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
        $item = Kategori_DestinasiModel::findOrFail($id);
        $item -> delete();
        
        toast('Berhasil Dihapus','success');
        return redirect()->route('kategori_destinasi.index');
    }
}

