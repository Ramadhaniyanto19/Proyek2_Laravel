<?php

namespace App\Http\Controllers;

use App\Models\Taman;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;

class DashboardTamanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('dashboard.taman.dashboardTaman', [
            'taman' => Taman::get()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard.taman.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
         $validatedata = Request()->validate([
            'judul' => 'required|max:25',
            'deskripsi' => 'required|min:300|max:1000',
            'gambar' => 'required|image|file|max:5000',
            'location' => 'required',
            'jam' => 'required',
            'nomor_hp' => 'required',
            'maps' => 'required',
            'iframe' => 'required',
        ]);

        // if($request->image('gambar')){
        //     $validatedata['gambar'] = $request->image('gambar')->store('gambar');
        // }
        if($request->file('gambar')){
            $validatedata['gambar'] = $request->file('gambar')->store('gambar-taman');
        }

        $validatedata['deskripsi']= strip_tags($request->deskripsi);
        Taman::create($validatedata);

        return redirect('/dashboardTaman')->with('success', 'Data berhasil ditambahkan!');
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
    public function edit(Taman $dashboardTaman)
    {
        return view('dashboard.taman.edit', [
            'taman'=> $dashboardTaman
        ]);
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
    public function destroy(Taman $dashboardTaman)
    {
        if($dashboardTaman){
            Storage::delete($dashboardTaman->gambar);
        }
        Taman::destroy($dashboardTaman->id);
        return redirect('/dashboardTaman')->with('success', 'Data berhasil dihapus!');
    }
}
