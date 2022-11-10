<?php

namespace App\Http\Controllers;

use App\Models\Edukasi;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class EdukasiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function edukasi(Edukasi $id)
    {
        

        return view('edukasi',[
            "tittle" => "Detail Edukasi",
            "detailedukasi" => Edukasi::Find($id)
        ]);
    }
    
    
    public function edukasilist()
    {
        $edukasis = Edukasi::latest();
        if(request('search')){
            $edukasis->where('judul', 'like', '%' . request('search') . '%')
                        ->orWhere('deskripsi', 'like', '%' . request('search') . '%');
        }

        return view('edukasilist',[
       "tittle" => "Wisata Edukasi",
       "edukasilist" => $edukasis->get()
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
