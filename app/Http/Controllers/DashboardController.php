<?php

namespace App\Http\Controllers;

use App\Models\Admin\Artikel;
use App\Models\Contact;
use App\Models\Kategorihome;
use App\Models\User;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function dashboard()
    {

        $artikelcount = Artikel::count();
        $contactlcount = Contact::count();
        $categoricount = Kategorihome::count();
        $usercount = User::count();
        return view(
            'dashboard',
            [
                'artikelcount' => $artikelcount,
                'contactlcount' => $contactlcount,
                'categoricount' => $categoricount,
                'usercount' => $usercount
            ]
        );
    }
}
