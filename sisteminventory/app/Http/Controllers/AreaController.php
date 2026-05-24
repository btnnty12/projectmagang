<?php

namespace App\Http\Controllers;

use App\Models\Area;
use Illuminate\Http\Request;

class AreaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $areas = Area::latest()->get();

        return view('areas.index', compact('areas'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('areas.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'area_name' => 'required',
            'city' => 'required',
            'province' => 'required',
        ]);

        Area::create($request->all());

        return redirect()
            ->route('areas.index')
            ->with('success', 'Area berhasil ditambahkan');
    }

    /**
     * Display the specified resource.
     */
    public function show(Area $area)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Area $area)
    {
        return view('areas.edit', compact('area'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Area $area)
    {
        $request->validate([
            'area_name' => 'required',
            'city' => 'required',
            'province' => 'required',
        ]);

        $area->update($request->all());

        return redirect()
            ->route('areas.index')
            ->with('success', 'Area berhasil diupdate');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Area $area)
    {
        $area->delete();

        return redirect()
            ->route('areas.index')
            ->with('success', 'Area berhasil dihapus');
    }
}
