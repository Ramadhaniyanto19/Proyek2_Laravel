<?php

namespace App\Http\Controllers;

use App\Models\Cafe;
use App\Models\Angkringan;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;

class DashboardAngkringanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('dashboard.angkringan.dashboardAngkringan', [
            'angkringan' => Angkringan::get()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard.angkringan.create');
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
            $validatedata['gambar'] = $request->file('gambar')->store('gambar-angkringan');
        }

        $validatedata['deskripsi']= strip_tags($request->deskripsi);
        Angkringan::create($validatedata);

        return redirect('/dashboardAngkringan')->with('success', 'Data berhasil ditambahkan!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Angkringan  $angkringan
     * @return \Illuminate\Http\Response
     */
    public function show(Angkringan $angkringan)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Angkringan  $angkringan
     * @return \Illuminate\Http\Response
     */
    public function edit(Angkringan $dashboardAngkringan)
    {
        return view('dashboard.angkringan.edit', [
            'angkringan'=>$dashboardAngkringan
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Angkringan  $angkringan
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Angkringan $dashboardAngkringan)
    {
         $validatedata = Request()->validate([
            'judul' => 'required|max:25',
            'deskripsi' => 'required|min:300|max:700',
            'gambar' => 'image|file|max:5000',
            'location' => 'required',
            'jam' => 'required',
            'nomor_hp' => 'required',
            'maps' => 'required',
            'iframe' => 'required',
        ]);

            if($request->file('gambar')){
            if($request->oldGambar){
                Storage::delete($request->oldGambar);
            }
            $validatedata['gambar'] = $request->file('gambar')->store('gambar-angkringan');
            }

        $validatedata['deskripsi']= strip_tags($request->deskripsi);
        Angkringan::where('id', $dashboardAngkringan->id)->update($validatedata);
        return redirect('/dashboardAngkringan')->with('success', 'Data berhasil diupdate!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Angkringan  $angkringan
     * @return \Illuminate\Http\Response
     */
    public function destroy(Angkringan $dashboardAngkringan)
    {
        if($dashboardAngkringan){
            Storage::delete($dashboardAngkringan->gambar);
        }
        Angkringan::destroy($dashboardAngkringan->id);
        return redirect('/dashboardAngkringan')->with('success', 'Data berhasil dihapus!');
    }
}
