<?php

namespace App\Http\Controllers;

use App\Models\Abouthome;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class AbouthomeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('admin.abouthome.index', [
            'abouthome' => Abouthome::paginate(10),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.abouthome.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $abouthome = Abouthome::create([
            'judul' => $request->judul,
            'deskripsi' => $request->deskripsi,
            'image' => $request->file('image')->store('images/about', 'public'),
            'button'  => $request->button,

        ]);

        return redirect()->route('admin.abouthome.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Abouthome $abouthome)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Abouthome $abouthome)
    {
        return view('admin.abouthome.edit', [
            'abouthome' => $abouthome,
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Abouthome $abouthome)
    {
        $abouthome->update([
            'judul' => $request->judul,
            'deskripsi' => $request->deskripsi,
            'image' => $request->file('image')->store('images/about', 'public'),
            'button'  => $request->button,
        ]);

        return redirect()->route('admin.abouthome.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Abouthome $abouthome)
    {
        Storage::delete($abouthome->image);
        $abouthome->delete();

        return redirect()->route('admin.abouthome.index');
    }
}
