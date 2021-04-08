<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Playlist;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Storage;

class PlaylistController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $playlist = Playlist::all();
        return view('backend.playlist.index', compact('playlist'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.playlist.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'judul_playlist'     => 'required|min:4',
        ]);

        $data = $request->all();
        $data['slug']            = Str::slug($request->judul_playlist);
        $data['user_id']         = Auth::id();
        $data['gambar_playlist'] = $request->file('gambar_playlist')->store('playlist');

        Playlist::create($data);

        return redirect()->route('playlist.index')->with(['success' => 'Data berhasil diupdate']);
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
        $playlist = Playlist::findOrFail($id);

        return view('backend.playlist.edit', compact('playlist'));
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
        //$this->validate($request, [
        //    'judul' => 'required|min:4',
        //]); 
        if(empty($request->file('gambar_playlist'))) {

            $playlist = Playlist::find($id);
            $playlist->update([
                'judul_playlist' => $request->judul_playlist,
                'deskripsi'      => $request->deskripsi,
                'slug'           => Str::slug($request->judul_playlist),
                'kategory_id'    => $request->kategori_id,
                'is_active'      => $request->is_active, 
                'user_id'        => Auth::id(),
                //$data['gambar_playlist'] = $request->file('gambar_playlist')->store('artikel');
            ]);

            return redirect()->route('playlist.index')->with(['success' => 'Data berhasil disimpan']);
        } else {

            $playlist = Playlist::find($id);
            Storage::delete($playlist->gambar_playlist);
            $playlist->update([
                'judul_playlist'  => $request->judul_playlist,
                'deskripsi'       => $request->deskripsi,
                'slug'            => Str::slug($request->judul_playlist),
                'kategory_id'     => $request->kategori_id,
                'is_active'       => $request->is_active, 
                'user_id'         => Auth::id(),
                'gambar_playlist' => $request->file('gambar_playlist')->store('playlist'),
            ]);

            return redirect()->route('playlist.index')->with(['success' => 'Data berhasil disimpan']);
        }   
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $playlist = Playlist::find($id);
        Storage::delete($playlist->gambar_playlist);
        $playlist->delete();

        return redirect()->route('playlist.index')->with(['success' => 'Data berhasil dihapus']);
    }
}
