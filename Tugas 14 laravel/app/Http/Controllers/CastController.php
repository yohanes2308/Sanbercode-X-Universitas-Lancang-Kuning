<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cast;

class CastController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
       $Cast = Cast::all();
       return view('cast.index', ["cast => $cast"]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view ('cast.add');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|min:8',
            'umur' => 'required',
            'bio' => 'required',
        ]);

        Cast::create([
    		'name' => $request->title,
    		'umur' => $request->umur,
            'bio' => $request->bio,
    	]);

        return redirect('/cast');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $cast = Cast::all();
        return view('cast.show', compact('cast'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $cast = Cast::all();
        return view('cast.edit', compact('cast'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'name' => 'required|min:8',
            'umur' => 'required',
            'bio' => 'required',
        ]);

        $cast = Cast::find(id);
        
        $cast->name = $request['name'];
        $cast->umur = $request['umur'];
        $cast->bio = $request['bio'];

        $cast->save();

        return redirect('/cast');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $cast = Cast::find($id);
        $cast->delete();
        return redirect('/cast');
    }
}
