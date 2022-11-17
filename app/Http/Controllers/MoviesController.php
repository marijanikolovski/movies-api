<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\MovieRequest;
use App\Models\Movie;

class MoviesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return Movie::all();
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(MovieRequest $request)
    {
        $validated = $request->validated();

        $movieCreate = Movie::create([
            'title' => $validated['title'],
            'director' => $validated['director'],
            'imageUrl' => $validated['imageUrl'],
            'duration' => $validated['duration'],
            'releaseDate' => $validated['releaseDate'],
            'genre' => $validated['genre'],
        ]);

        return $movieCreate;
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return Movie::find($id);
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
    public function update(MovieRequest $request, $id)
    {
        $validated = $request->validated();

        $movieUpdate = Movie::where($id)->update([
            'title' => $validated['title'],
            'director' => $validated['director'],
            'imageUrl' => $validated['imageUrl'],
            'duration' => $validated['duration'],
            'releaseDate' => $validated['releaseDate'],
            'genre' => $validated['genre'],
        ]);

        return $movieUpdate;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        return Movie::find($id)->delete();
    }
}
