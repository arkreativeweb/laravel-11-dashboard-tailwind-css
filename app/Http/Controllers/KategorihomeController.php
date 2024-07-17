<?php

namespace App\Http\Controllers;

use App\Models\Kategorihome;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class KategorihomeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('admin.kategorihome.index', [
            'kategori' => Kategorihome::paginate(9),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.kategorihome.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $kategorihome = Kategorihome::create([
            'judul' => $request->judul,
            'deskripsi' => $request->deskripsi,
            'image' => $request->file('image')->store('images/kategori', 'public'),
        ]);

        return redirect()->route('admin.kategorihome.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Kategorihome $kategorihome)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Kategorihome $kategorihome)
    {
        return view('admin.kategorihome.edit', [
            'kategori' => $kategorihome,
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Kategorihome $kategorihome)
    {
        $kategorihome->update([
            'judul' => $request->judul,
            'deskripsi' => $request->deskripsi,
            'image' => $request->file('image')->store('images/kategori', 'public'),
        ]);

        return redirect()->route('admin.kategorihome.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Kategorihome $kategorihome)
    {
        Storage::delete($kategorihome->image);
        $kategorihome->delete();

        return redirect()->route('admin.kategorihome.index');
    }
}
