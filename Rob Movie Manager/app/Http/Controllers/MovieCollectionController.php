<?php

namespace RobMovieManager\Http\Controllers;

use RobMovieManager\Movie;
use Illuminate\Http\Request;

class MovieCollectionController extends Controller
{
    /**
     * Display a listing of the resource.
     * "Read" MovieCollection page.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $movieCollection = Movie::get();
        return view('moviecollection.index', array('movieCollection' => $movieCollection));
    }

    /**
     * Show the form for creating a new resource.
     * "Create" MovieCollection Movie.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("moviecollection.create");
    }

    /**
     * Store a newly created resource in storage.
     * "Update" MovieCollection Movie.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Movie::create($request->all());
        return redirect('moviecollection');

    }

    /**
     * Display the specified resource.
     * "Read" MovieCollection Movie page.
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
     * "Update" MovieCollection Movie.
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
     * "Update" MovieCollection Movie.
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
     * "Delete" MovieCollection Movie.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $movie = Movie::findOrFail($id);
        $movie->delete($id);
        return redirect('moviecollection');

    }
}