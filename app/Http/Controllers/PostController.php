<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class PostController extends Controller
{
    public function index()
    {
        $posts = Post::all();

        return view('posts.post', compact('posts'));
    }

    public function create()
    {
        return view('posts.create');
    }

    public function store(Request $request)
    {
        // panggil model, validasi, insert

        $validated = $request->validate([
            'nama' => 'required|max:255',
            'kategori' => 'required|min:3',
        ]);

        // Post::create($validated);
        Post::create([
            'nama'     => $request->nama,
            'kategori'   => $request->kategori
        ]);

        return redirect('/post')->with('status', 'Data berhasil ditambahakan!');
    }

    public function edit($id)
    {
        $row = Post::find($id);

        return view('posts.edit', compact('row'));
    }

    public function update(Request $request, $id)
    {
        $validated = $request->validate([
            'nama' => 'required|max:255',
            'kategori' => 'required|min:3',
        ]);

        Post::where('id', $id)
            ->update($validated);

        return redirect('/post')->with('status', 'Data berhasil diubah!');
    }

    public function destroy($id)
    {
        Post::where('id', $id)
            ->delete();

        return redirect('/post')->with('status', 'Data berhasil dihapus!');
    }
}
