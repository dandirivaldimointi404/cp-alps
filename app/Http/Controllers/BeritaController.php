<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;


class BeritaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $berita = Blog::all();
        return view('berita.index', compact('berita'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('berita.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'gambar' => '',
            'judul' => '',
            'konten' => '',
            'kategori' => '',
        ]);

        try {
            $imagePath = $request->file('gambar')->store('', 'public');
        } catch (\Exception $e) {
            return redirect()->back()->withInput()->withErrors(['gambar' => 'Failed to store the image.']);
        }

        $validatedData['gambar'] = $imagePath;

        try {
            Blog::create($validatedData);
        } catch (\Exception $e) {
            return redirect()->back()->withInput()->withErrors(['general' => 'Failed to save the data.']);
        }
        

        return redirect()->route('berita.index')->with('success', 'Data testimoni berhasil ditambahkan.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Blog $berita)
    {
        return view('berita.edit', compact('berita'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $validatedData = $request->validate([
            'gambar' => '',
            'judul' => 'required',
            'konten' => 'required',
            'kategori' => 'required',
        ]);

        try {
            $testimoni = Blog::findOrFail($id);

            if ($request->hasFile('gambar')) {
                if ($testimoni->gambar) {
                    Storage::disk('public')->delete($testimoni->gambar);
                }
                $imagePath = $request->file('gambar')->store('', 'public');
                $validatedData['gambar'] = $imagePath;
            }

            $testimoni->update($validatedData);
        } catch (\Exception $e) {
            return redirect()->back()->withInput()->withErrors(['general' => 'Failed to update the data.']);
        }

        return redirect()->route('berita.index')->with('success', 'Data testimoni berhasil diperbarui.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($slug)
    {
        try {
            $berita = Blog::findOrFail($slug);

            if ($berita->gambar) {
                Storage::disk('public')->delete($berita->gambar);
            }

            $berita->delete();

            return redirect()->route('berita.index')->with('success', 'Data testimoni berhasil dihapus.');
        } catch (\Exception $e) {
            return redirect()->back()->withErrors(['general' => 'Failed to delete the data.']);
        }
    }
}
