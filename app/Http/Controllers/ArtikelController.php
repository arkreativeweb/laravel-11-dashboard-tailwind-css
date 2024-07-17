<?php

namespace App\Http\Controllers;

use App\Models\Admin\Artikel;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class ArtikelController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('admin.artikel.index', [
            'artikel' => Artikel::orderBy('created_at', 'desc')->paginate(10),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.artikel.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $artikel = Artikel::create([

            'title' => $request->title,
            'content' => $request->content,
            'image' => $request->file('image')->store('images/artikel', 'public'),
            'slug' => Str::slug($request->title),
            'meta_deskripsi' => $request->meta_deskripsi,
            'meta_keyword' => $request->meta_keyword,
            'user_id' => auth::id(),
        ]);

        return redirect()->route('admin.artikel.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Artikel $artikel)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Artikel $artikel)
    {
        return view('admin.artikel.edit', [
            'artikel' => $artikel
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Artikel $artikel)
    {
        $artikel = $artikel->update([

            'title' => $request->title,
            'content' => $request->content,
            'image' => $request->file('image')->store('images/artikel', 'public'),
            'slug' => Str::slug($request->title),
            'meta_deskripsi' => $request->meta_deskripsi,
            'meta_keyword' => $request->meta_keyword,
            'user_id' => auth::id(),

        ]);

        return redirect()->route('admin.artikel.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Artikel $artikel)
    {
        Storage::delete($artikel->image);
        $artikel->delete();

        return redirect()->route('admin.artikel.index');
    }
}
