<?php

namespace App\Http\Controllers;

use App\Models\Abouthome;
use App\Models\Admin\Artikel;
use App\Models\Banner;
use App\Models\Kategorihome;
use App\Models\Treatment;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        return view('welcome', [
            'banner' => Banner::all(),
            'kategorihome' => Kategorihome::all(),
            'abouthome' => Abouthome::paginate(6),
            'treatment' => Treatment::paginate(4),
            'artikel' => Artikel::orderBy('created_at', 'desc')->paginate(2),



        ]);
    }

    public function about()
    {
        return view('about', [
            'abouthome' => Abouthome::paginate(1),
        ]);
    }

    public function produk()
    {
        return view('produk', [
            'artikel' => Artikel::paginate(10),
        ]);
    }

    public function artikel()
    {
        return view('blog', [
            'artikel' => Artikel::paginate(9),
        ]);
    }

    public function artikeldetail($slug)
    {
        return view('artikeldetail', [
            'artikel' => Artikel::where('slug', $slug)->get(),
            'recentPosts' => Artikel::orderBy('created_at', 'desc')->take(3)->get() // Ambil 5 artikel terbaru
        ]);
    }
}
