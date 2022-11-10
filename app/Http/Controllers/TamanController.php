<?php

namespace App\Http\Controllers;

use App\Models\Taman;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class TamanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function taman()
    {
         $tamans = Taman::latest();
        if(request('search')){
            $tamans->where('judul', 'like', '%' . request('search') . '%')
                        ->orWhere('deskripsi', 'like', '%' . request('search') . '%');
        }

        return view('tamanlist', [
         "tittle" => "List Taman",
         "tamansolo"=> $tamans->get()
    ]);
    }

    public function detailtaman(Taman $id){
         return view('detailtaman',[
        "tittle" => "Detail Taman",
        "tamanku"=>Taman::Find($id)
    ]);
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
     * @param  \App\Models\Taman  $taman
     * @return \Illuminate\Http\Response
     */
    public function show(Taman $taman)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Taman  $taman
     * @return \Illuminate\Http\Response
     */
    public function edit(Taman $taman)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Taman  $taman
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Taman $taman)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Taman  $taman
     * @return \Illuminate\Http\Response
     */
    public function destroy(Taman $taman)
    {
        //
    }
}
