<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;

class AvatarController extends Controller
{
    public function update(Request $request): RedirectResponse
    {


        $request->user()->update([
            'avatar' => $request->file('avatar')->store('avatars', 'public'),
            'des'  => $request->des,
            'fb'  => $request->fb,
            'ig'  => $request->ig,
            'x'  => $request->x,
        ]);

        return back()->with('status', 'password-updated');
    }
}
