<?php

namespace App\Http\Controllers;

use App\Models\Cafe;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;

class DashboardCafeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('dashboard.cafe.dashboardCafe',[
            'tittle'=>'Dashboard Cafe',
            'cafe' => Cafe::get()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard.cafe.create');
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
            $validatedata['gambar'] = $request->file('gambar')->store('gambar-cafe');
        }

        $validatedata['deskripsi']= strip_tags($request->deskripsi);
        Cafe::create($validatedata);

        return redirect('/dashboardCafe')->with('success', 'Data berhasil ditambahkan!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Cafe  $cafe
     * @return \Illuminate\Http\Response
     */
    public function show(Cafe $cafe)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Cafe  $cafe
     * @return \Illuminate\Http\Response
     */
    public function edit(Cafe $dashboardCafe)
    {
        return view('dashboard.cafe.edit',[
            'cafe' => $dashboardCafe
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Cafe  $cafe
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Cafe $cafe, $id)
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
            $validatedata['gambar'] = $request->file('gambar')->store('gambar-cafe');
            }

        $validatedata['deskripsi']= strip_tags($request->deskripsi);
        Cafe::where('id', $id)->update($validatedata);
        return redirect('/dashboardCafe')->with('success', 'Data berhasil diupdate!');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Cafe  $cafe
     * @return \Illuminate\Http\Response
     */
    public function destroy(Cafe $dashboardCafe)
    {
        if($dashboardCafe){
            Storage::delete($dashboardCafe->gambar);
        }
        Cafe::destroy($dashboardCafe->id);
        return redirect('/dashboardCafe')->with('success', 'Data berhasil dihapus!');
        
    }
}
