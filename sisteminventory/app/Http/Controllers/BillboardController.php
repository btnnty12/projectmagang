<?php

namespace App\Http\Controllers;

use App\Models\Billboard;
use App\Models\Area;
use App\Models\Vendor;
use Illuminate\Http\Request;

class BillboardController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $billboards = Billboard::with(['area', 'vendor'])
                        ->latest()
                        ->get();

        return view('billboards.index', compact('billboards'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $areas = Area::all();
        $vendors = Vendor::all();

        return view('billboards.create', compact(
            'areas',
            'vendors'
        ));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
         $request->validate([
            'area_id' => 'required',
            'vendor_id' => 'required',

            'location_description' => 'required',

            'view_from' => 'required',
            'view_to' => 'required',

            'length' => 'required|numeric',
            'height' => 'required|numeric',

            'billboard_type' => 'required',
            'orientation' => 'required',

            'construction_side' => 'required|numeric',

            'latitude' => 'required',
            'longitude' => 'required',

            'photo' => 'nullable|image|mimes:jpg,jpeg,png|max:2048',
        ]);
        $data = $request->all();

        // upload photo
        if ($request->hasFile('photo')) {

            $photo = $request->file('photo')
                             ->store('billboards', 'public');

            $data['photo'] = $photo;
        }

        // sementara hardcode user
        $data['user_id'] = 1;

        Billboard::create($data);

        return redirect()
            ->route('billboards.index')
            ->with('success', 'Billboard berhasil ditambahkan');
    }

    /**
     * Display the specified resource.
     */
    public function show(Billboard $billboard)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Billboard $billboard)
    {
        $areas = Area::all();
        $vendors = Vendor::all();

        return view('billboards.edit', compact(
            'billboard',
            'areas',
            'vendors'
        ));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Billboard $billboard)
    {
         $request->validate([
            'area_id' => 'required',
            'vendor_id' => 'required',

            'location_description' => 'required',

            'view_from' => 'required',
            'view_to' => 'required',

            'length' => 'required|numeric',
            'height' => 'required|numeric',

            'billboard_type' => 'required',
            'orientation' => 'required',

            'construction_side' => 'required|numeric',

            'latitude' => 'required',
            'longitude' => 'required',
        ]);

        $data = $request->all();

        if ($request->hasFile('photo')) {

            $photo = $request->file('photo')
                             ->store('billboards', 'public');

            $data['photo'] = $photo;
        }

        $billboard->update($data);

        return redirect()
            ->route('billboards.index')
            ->with('success', 'Billboard berhasil diupdate');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Billboard $billboard)
    {
        $billboard->delete();

        return redirect()
            ->route('billboards.index')
            ->with('success', 'Billboard berhasil dihapus');
    }
}
