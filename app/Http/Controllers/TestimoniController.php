<?php

namespace App\Http\Controllers;

use App\Models\Testimoni;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;

class TestimoniController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $testimoni = Testimoni::all();
        return view('testimoni.index', compact('testimoni'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('testimoni.create');
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
            'nama_kota' => '',
            'nama_client' => '',
            'project' => '',
            'testimoni' => '',
            'latitude' => '',
            'longitude' => '',
        ]);

        try {
            $imagePath = $request->file('gambar')->store('', 'public');
        } catch (\Exception $e) {
            return redirect()->back()->withInput()->withErrors(['gambar' => 'Failed to store the image.']);
        }

        $validatedData['gambar'] = $imagePath;

        try {
            Testimoni::create($validatedData);
        } catch (\Exception $e) {
            return redirect()->back()->withInput()->withErrors(['general' => 'Failed to save the data.']);
        }

        return redirect()->route('testimoni.index')->with('success', 'Data testimoni berhasil ditambahkan.');
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
    public function edit(Testimoni $testimoni)
    {
        // $testimoni = Testimoni::all();
        return view('testimoni.edit', compact('testimoni'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id_testimoni)
    {
        $validatedData = $request->validate([
            'gambar' => '',
            'nama_kota' => '',
            'nama_client' => '',
            'project' => '',
            'testimoni' => '',
            'latitude' => '',
            'longitude' => '',
        ]);

        try {
            $testimoni = Testimoni::findOrFail($id_testimoni);

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

        return redirect()->route('testimoni.index')->with('success', 'Data testimoni berhasil diperbarui.');
    }



    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id_testimoni)
    {
        try {
            $testimoni = Testimoni::findOrFail($id_testimoni);

            if ($testimoni->gambar) {
                Storage::disk('public')->delete($testimoni->gambar);
            }

            $testimoni->delete();

            return redirect()->route('testimoni.index')->with('success', 'Data testimoni berhasil dihapus.');
        } catch (\Exception $e) {
            return redirect()->back()->withErrors(['general' => 'Failed to delete the data.']);
        }
    }
}
