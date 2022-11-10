<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Profile;

class ProfileController extends Controller
{

    public function index()
    {
        $profile = Profile::all();

        return view('profile.profile', compact('profile'));
    }


    public function create()
    {
        return view('profile.addProfile');
    }


    public function store(Request $request)
    {

        $image = $request->gambar->getClientOriginalName() . time() .  '.' . $request->gambar->extension();

        $request->gambar->move(public_path('images'), $image);

        Profile::create([
            'nama'     => $request->nama,
            'umur'   => $request->umur,
            'alamat'   => $request->alamat,
            'pekerjaan'   => $request->pekerjaan,
            'gambar' => 'images/' . $image,
        ]);


        return redirect()->route('profile.index');
    }

    public function show($id)
    {
        //
    }


    public function edit(Profile $profile)
    {

        return view('profile.editProfile', compact('profile'));
    }

    public function update(Request $request, $id)
    {
        $image = $request->gambar->getClientOriginalName() . time() .  '.' . $request->gambar->extension();

        $request->gambar->move(public_path('images'), $image);

        Profile::where('id', $id)
            ->update([
                'nama'     => $request->nama,
                'umur'   => $request->umur,
                'alamat'   => $request->alamat,
                'pekerjaan'   => $request->pekerjaan,
                'gambar' => 'images/' . $image,
            ]);


        return redirect()->route('profile.index');
    }

    public function destroy($id)
    {
        Profile::where('id', $id)->delete();
    }
}
