<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Place;

class PlacesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // Use Query Builder
        // $places = DB::table('places')->get();

        // Use Eloquent ORM (Object Relational Model)
        $places = Place::all();
        return view('places/index', ['places' => $places]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('places/create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // $place = new Place;
        // $place->name = $request->name;
        // $place->city = $request->city;
        // $place->postalCode = $request->postalCode;

        // $place->save();

        // If mass assignment happen
        // Place::create([
        //     'name' => $request->name,
        //     'city' => $request->city,
        //     'postalCode' => $request->postalCode
        // ]);

        $request->validate([
            'name' => 'required',
            'city' => 'required',
            'postalCode' => 'required|size:5'
        ]);

        // Shorten code
        Place::create($request->all());

        // Redirect with flashed session data
        return redirect('/places')->with('status', 'Cultural Places Added!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Place $place)
    {
        return view('places/show', compact('place'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
