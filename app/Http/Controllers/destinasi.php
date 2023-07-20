<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Str;

use App\Models\Kategori_DestinasiiModel;

use App\Models\DestinasiModel;
use App\Http\Requests\DestinasiRequest;

use RealRashid\SweetAlert\Facades\Alert;

class destinasi extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __index()
    {
        {
            $items = DestinasiModel::all()->sortBy('destinasi');
            return view('pages.destinasi.index')->with([
                'items' => $items
            ]);
        }
    
        public function create()
        {
            return view('pages.destinasi.create');
        }
    
        public function store(DestinasiRequest $request)
        {
            $data = $request->all();
            $data['slug'] = Str::slug($request->nama_destinasi);
    
            DestinasiModel::create($data);
            
            toast('Berhasil Ditambah','success');
            return redirect()->route('destinasi.index');
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
            $item = DestinasiModel::findOrFail($id);
    
            return view('pages.destinasi.edit')->with([
                'item' => $item
            ]);
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
            $data = $request->all();
    
            $item = DestinasiModel::findOrFail($id);
            $item->update($data);
    
            toast('Berhasil Diubah','success');
            return redirect()->route('destinasi.index');
        }
    
        /**
         * Remove the specified resource from storage.
         *
         * @param  int  $id
         * @return \Illuminate\Http\Response
         */
        public function destroy($id)
        {
            $item = DestinasiModel::findOrFail($id);
            $item -> delete();
    
            Kategori_DestinasiModel::where('id_kategori', $id)->delete();
    
            toast('Berhasil Dihapus','success');
            return redirect()->route('destinasi.index');
        }
    
        public function kategori_destinasi($id)
        {
            $wisata = DestinasiModel::findOrFail($id);
            $items = Kategori_DestinasiModel::with('DestinasiRelation')
                ->where('id_kategori', $id)
                ->get();
    
            return view('pages.destinasi.kateori_destinasi')->with([
                'destinasi' => $destinasi,
                'items' => $items
            ]);
        }
    }
}
