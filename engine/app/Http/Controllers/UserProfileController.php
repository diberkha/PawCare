<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserProfileController extends Controller
{
    public function edit()
    {
        return view('paw-user.editprofile');
    }

    public function update(Request $request)
    {
        $user = auth()->user();

        $user->name = $request->input('name');
        $user->country = $request->input('country');

        if ($request->hasFile('foto')) {
            if ($user->foto) {
                if(file_exists('images/userprofilepic/' . $user->foto)){
                    unlink('images/userprofilepic/' . $user->foto);
                }
            }
            
            $image = $request->file('foto');
            $nama_file = time() . '.' . $image->getClientOriginalExtension();
            $image->move('images/userprofilepic/', $nama_file);
            $user->foto = $nama_file;
        }

        $user->save();

        return redirect()->route('pawcare.myprofile');
    }
}
