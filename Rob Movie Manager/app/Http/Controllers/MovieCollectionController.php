<?php

namespace RobMovieManager\Http\Controllers;

use RobMovieManager\Movie;
use RobMovieManager\Http\Requests\MovieCollectionRequest;
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
    public function store(MovieCollectionRequest $request)
    {
        Movie::create($request->all());
        return redirect('moviecollection');

    }

    /**
     * Display the specified resource.
     * "Read" MovieCollection Movie page.
     * Currently only suitable to be used by the Delete page.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $movieCollection = Movie::findOrFail($id);
        return view("moviecollection.edit", array('movieCollection' => $movieCollection));
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
        $movieCollection = Movie::findOrFail($id);
        return view("moviecollection.edit", array('movieCollection' => $movieCollection));
    }

    /**
     * Update the specified resource in storage.
     * "Update" MovieCollection Movie.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(MovieCollectionRequest $request, $id)
    {
        $movie = Movie::findOrFail($id);
        $movie->update($request->all());
        return redirect('moviecollection');
    }

    /**
     * To Delete the specified resource.
     * "Delete" MovieCollection Movie page.
     * This actually uses the "show" view as a confirmation before doing a "destroy".
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function delete($id)
    {
        $movieCollection = Movie::findOrFail($id);
        return view("moviecollection.show", array('movieCollection' => $movieCollection));
    }

    /**
     * Remove the specified resource from storage.
     * From "Delete" MovieCollection Movie.
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
