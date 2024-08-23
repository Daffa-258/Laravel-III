<?php

namespace App\Http\Controllers;

use App\Models\Cast;
use Illuminate\Http\Request;

class CastController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('cast.index',[
            'title' => 'cast',
            'casts' => Cast::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('cast.create',[
            'title' => 'create',
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required|max:45',
            'umur' => 'required|integer',
            'bio' => 'required',
        ]);

        Cast::create($request->all());
        return redirect('/casts')->with('success', 'Cast created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Cast $cast)
    {
        return view('cast.show',[
            'title' => $cast->name,
            'cast' => $cast
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Cast $cast)
    {
        return view('cast.edit',[
            'title' => 'edit',
            'cast' => $cast
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Cast $cast)
    {
        
        $request->validate([
            'nama' => 'required|max:45',
            'umur' => 'required|integer',
            'bio' => 'required',
        ]);

        $cast->update($request->all());
        return redirect('/casts')->with('success', 'Cast updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Cast $cast)
    {
        $cast->delete();
        return redirect('/casts')->with('success', 'Cast deleted successfully.');
    }
}
