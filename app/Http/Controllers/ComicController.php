<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Comic;

class ComicController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $comics = Comic::all();
        return view('comics.index', compact('comics'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('comics.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'title' =>'required|min:2|max:50',
            'description' =>'required',
            'thumb' =>'required|min:3|max:255',
            'price' =>'required|max:10',
            'series' =>'required|min:2|max:50',

        ], [
            'title.required' => 'Il nome del fumetto è obbligatorio',
            'title.min' => 'Il nome del fumetto deve avere almeno :min caratteri',
            'title.max' => 'Il nome del fumetto può avere massimo :max caratteri',
            'description.required' => 'La descrizione è obbligatoria',
            'thumb.required' => 'L\'immagine è obbligatoria',
            'price.required' => 'Il prezzo è obbligatorio',
            'price.max' => 'Il prezzo deve essere massimo :max caratteri',
            'series.required' => 'La serie è obbligatoria',
            'series.min' => 'Il nome del fumetto deve avere almeno :min caratteri',
            'series.max' => 'Il nome del fumetto può avere massimo :max caratteri',
        ]);

        $form_data = $request->all();

        $add_comic = new Comic();

        $form_data['slug'] = Comic::generateSlug($form_data['title']);

        $add_comic->fill($form_data);

        $add_comic->save();

        return redirect()->route('comics.show', $add_comic->slug);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($slug)
    {
        $comic = Comic::where('slug', $slug)->first();
        return view('comics.show', compact('comic'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Comic $comic)
    {
        return view('comics.edit', compact('comic'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Comic $comic)
    {
        $form_data = $request->all();

        if($form_data['title'] === $comic->title){
            $form_data['slug'] = $comic->slug;
        }else {
            $form_data['slug'] = Comic::generateSlug($form_data['title']);
        }


        $comic->update($form_data);

        return redirect()->route('comics.show', $comic->slug);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Comic $comic)
    {
        $comic->delete();

        return redirect()->route('comics.index')->with('deleted', "Hai correttamente cancellato $comic->title");
    }
}
