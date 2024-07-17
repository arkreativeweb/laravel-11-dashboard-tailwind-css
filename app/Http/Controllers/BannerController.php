<?php

namespace App\Http\Controllers;

use App\Models\Banner;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class BannerController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('admin.banner.index', [
            'banner' => Banner::paginate(10),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.banner.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $banner = Banner::create([
            'judul' => $request->judul,
            'deskripsi' => $request->deskripsi,
            'image' => $request->file('image')->store('images/banner', 'public'),
            'buton'  => $request->buton,

        ]);

        return redirect()->route('admin.banner.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Banner $banner)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Banner $banner)
    {

        return view('admin.banner.edit', [
            'banner' => $banner,
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Banner $banner)
    {

        $banner = $banner->update([
            'judul' => $request->judul,
            'deskripsi' => $request->deskripsi,
            'image' => $request->file('image')->store('images/banner', 'public'),
            'buton'  => $request->buton,


        ]);

        return redirect()->route('admin.banner.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Banner $banner)
    {
        Storage::delete($banner->image);
        $banner->delete();

        return redirect()->route('admin.banner.index');
    }
}
