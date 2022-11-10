<?php

namespace App\Http\Controllers;

use App\Models\Alam;
use Illuminate\Http\Request;

class AlamController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function alam(Alam $id)
    {  
        return view('alam',[
        "tittle" => "Wisata Alam",
        "detailalam" => Alam::find($id)
    ]);
    }

    public function alamlist()
    {  
        $alamas = Alam::latest();
        if(request('search')){
            $alamas->where('judul', 'like', '%' . request('search') . '%')
                    ->orWhere('deskripsi', 'like', '%' . request('search') . '%');
        }

        return view('alamlist',[
        "tittle" => "Wisata Alam",
        "alamlist" => $alamas->get()
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
     * @param  \App\Models\Alam  $alam
     * @return \Illuminate\Http\Response
     */
    public function show(Alam $alam)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Alam  $alam
     * @return \Illuminate\Http\Response
     */
    public function edit(Alam $alam)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Alam  $alam
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Alam $alam)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Alam  $alam
     * @return \Illuminate\Http\Response
     */
    public function destroy(Alam $alam)
    {
        //
    }
}
