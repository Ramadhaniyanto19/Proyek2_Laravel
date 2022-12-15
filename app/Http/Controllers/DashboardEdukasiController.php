<?php

namespace App\Http\Controllers;

use App\Models\Alam;
use App\Models\Edukasi;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;

class DashboardEdukasiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view ('dashboard.edukasi.dashboardEdukasi',[
            "tittle" => "Daftar Edukasi",
            "edukasi" => Edukasi::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard.edukasi.create',[
            "tittle" => "Create Edukasi"
        ]);
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
            'sejarah' => 'required|min:300|max:2300',
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
            $validatedata['gambar'] = $request->file('gambar')->store('gambar-edukasi');
        }

        $validatedata['deskripsi']= strip_tags($request->deskripsi);
        $validatedata['sejarah']= strip_tags($request->sejarah);
        Edukasi::create($validatedata);

        return redirect('/dashboardEdukasi')->with('success', 'Data berhasil ditambahkan!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Edukasi  $edukasi
     * @return \Illuminate\Http\Response
     */
    public function show(Edukasi $edukasi)
    {
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Edukasi  $edukasi
     * @return \Illuminate\Http\Response
     */
    public function edit(Edukasi $dashboardEdukasi)
    {
        return view('dashboard.edukasi.edit', [
            'edukasi' => $dashboardEdukasi
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Edukasi  $edukasi
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Edukasi $dashboardEdukasi)
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
            $validatedata['gambar'] = $request->file('gambar')->store('gambar-edukasi');
            }

        $validatedata['deskripsi']= strip_tags($request->deskripsi);
        $validatedata['sejarah']= strip_tags($request->sejarah);
        Edukasi::where('id', $dashboardEdukasi->id)->update($validatedata);
        return redirect('/dashboardEdukasi')->with('success', 'Data berhasil diupdate!');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Edukasi  $edukasi
     * @return \Illuminate\Http\Response
     */
    public function destroy(Edukasi $dashboardEdukasi)
    {
        if($dashboardEdukasi){
            Storage::delete($dashboardEdukasi->gambar);
        }
        Edukasi::destroy($dashboardEdukasi->id);
        return redirect('/dashboardEdukasi')->with('success', 'Data berhasil dihapus!');
    }
}
