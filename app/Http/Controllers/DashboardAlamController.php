<?php

namespace App\Http\Controllers;

use App\Models\Alam;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;

class DashboardAlamController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $alams = Alam::latest();
        if(request('search')){
            $alams->where('judul', 'like', '%' . request('search') . '%');
        }

        return view ('dashboard.alam.dashboardAlam', [
            'tittle' => 'Daftar Alam',
            'alams'=> $alams->get()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard.alam.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        // ddd($request);
         $validatedata = Request()->validate([
            'judul' => 'required|max:25',
            'deskripsi' => 'required|min:300|max:700',
            'sejarah' => 'required|min:300|max:1000',
            'location' => 'required',
            'gambar' => 'required|image|file|max:5000',
            'jam' => 'required',
            'nomor_hp' => 'required',
            'ig' => 'required',
            'twt' => 'required',
            'fb' => 'required',
            'maps' => 'required',
            'iframe' => 'required',
        ]);

        // if($request->image('gambar')){
        //     $validatedata['gambar'] = $request->image('gambar')->store('gambar');
        // }
        if($request->file('gambar')){
            $validatedata['gambar'] = $request->file('gambar')->store('gambar');
        }

        $validatedata['deskripsi']= strip_tags($request->deskripsi);
        $validatedata['sejarah']= strip_tags($request->sejarah);
        Alam::create($validatedata);

        return redirect('/dashboardAlam')->with('success', 'Data berhasil ditambahkan!');
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
    public function edit(Alam $alam, $id)
    {   
        return view('dashboard.alam.edit', [
            'alam' => $alam->find($id)
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Alam  $alam
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Alam $alam, $id)
    {
             $validatedata = Request()->validate([
            'judul' => 'required|max:25',
            'deskripsi' => 'required|min:300|max:700',
            'sejarah' => 'required|min:300|max:1000',
            'location' => 'required',
            'gambar' => 'image|file|max:5000',
            'jam' => 'required',
            'nomor_hp' => 'required',
            'ig' => 'required',
            'twt' => 'required',
            'fb' => 'required',
            'maps' => 'required',
            'iframe' => 'required',
        ]);

            if($request->file('gambar')){
            if($request->oldGambar){
                Storage::delete($request->oldGambar);
            }
            $validatedata['gambar'] = $request->file('gambar')->store('gambar');
            }

        $validatedata['deskripsi']= strip_tags($request->deskripsi);
        $validatedata['sejarah']= strip_tags($request->sejarah);
        Alam::where('id', $id)->update($validatedata);
        return redirect('/dashboardAlam')->with('success', 'Data berhasil diupdate!');
        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Alam  $alam
     * @return \Illuminate\Http\Response
     */
    public function destroy(Alam $dashboardAlam)
    {
        if($dashboardAlam->gambar){
            Storage::delete($dashboardAlam->gambar);
        }
        Alam::destroy($dashboardAlam->id);
        return redirect('/dashboardAlam')->with('success', 'Data berhasil dihapus!');
    }
}
