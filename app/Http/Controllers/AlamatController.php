<?php

namespace App\Http\Controllers;

use App\Models\Alamat;
use Illuminate\Http\Request;

class AlamatController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('admin.alamat.index', [
            'alamat' => Alamat::paginate(10),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.alamat.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {


        $alamat = Alamat::create([
            'alamat' => $request->alamat,
            'email' => $request->email,
            'telepon' => $request->telepon,
            'maps' => $request->maps,
            'jam' => $request->jam,
        ]);


        return redirect()->route('admin.alamat.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Alamat $alamat)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Alamat $alamat)
    {
        return view('admin.alamat.edit', [
            'alamat' => $alamat
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Alamat $alamat)
    {

        $alamat->update([
            'alamat' => $request->alamat,
            'email' => $request->email,
            'telepon' => $request->telepon,
            'maps' => $request->maps,
            'jam' => $request->jam,
        ]);

        return redirect()->route('admin.alamat.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Alamat $alamat)
    {

        $alamat->delete();
        return redirect()->route('admin.alamat.index');
    }
}
