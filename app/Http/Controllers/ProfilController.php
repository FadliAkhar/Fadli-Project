<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProfilController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $title = "Profil Saya";
        $isi = "Perkenalkan Nama Saya Fadli Akhar Zusfian, Asal sekolah yaitu di Smkn 1 Bawang dengan jurusan yang saya pilih adalah
         Rpl/PengembanganPerangkat Lunak dan Gim. Alamat Rumah saya di Desa Blitar, Kec.Madukara, Kab. Banjarnegara, Jawa Tengah, Indonesia";
        return view('profil', ['title' => $title, 'isi'=>$isi]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
