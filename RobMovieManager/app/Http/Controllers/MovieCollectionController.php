<?php
/**
 * MovieCollectionController.php
 *
 * Main controller for Movie Manager project.
 *
 * @category   Controller
 * @package    RobMovieManager
 * @author     Rob Howe <rob@robhowe.com>
 * @copyright  2017 Rob Howe
 * @license    This file is proprietary and subject to the terms defined in file LICENSE.txt
 * @version    GitHub $Id$ https://github.com/robhowe/moviemanager
 * @link       http://moviemanager.robhowe.com/
 * @since      version 0.1
 */

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
        $movieCollection = Movie::sortable()->get();
        return view('moviecollection.index', compact('movieCollection'));
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
        $movie = Movie::create($request->all());
        session()->flash('message', 'Successfully added movie "' . $movie->title . '".');
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
        $movie = Movie::findOrFail($id);
        return view("moviecollection.edit", compact('movie'));
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
        $movie = Movie::findOrFail($id);
        return view("moviecollection.edit", compact('movie'));
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
        session()->flash('message', 'Successfully updated movie "' . $movie->title . '".');
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
        $movie = Movie::findOrFail($id);
        return view("moviecollection.show", compact('movie'));
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
        session()->flash('message', 'Successfully deleted movie "' . $movie->title . '".');
        return redirect('moviecollection');
    }

}
