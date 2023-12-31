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
        $products = Comic::orderBy('id' , 'desc')->paginate(6);
        return view('comics.index' , compact('products'));
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
        // prendo tutti i dati dal form
        $form_data = $request->all();
        // creo un nuovo oggetto Comic
        $new_comic = new Comic();
        $new_comic->title = $form_data['title'];
        $new_comic->slug = Comic::generateSlug($form_data['title']);
        $new_comic->description = $form_data['description'];
        $new_comic->thumb = $form_data['thumb'];
        $new_comic->price = $form_data['price'];
        $new_comic->series = $form_data['series'];
        $new_comic->sale_date = $form_data['sale_date'];
        $new_comic->type = $form_data['type'];
        // lo salvo nel db
        $new_comic->save();
        // vado alla show del nuovo fumetto
        return redirect()->route('comics.show' , $new_comic->id);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $comic = Comic::find($id);
        return view('comics.show' , compact('comic'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Comic $comic)
    {
        return view('comics.edit' , compact('comic'));
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

    //    genero un nuovo slug solo se è stato modificato il title
       if($comic->title == $form_data['title']){
        $form_data['slug'] = $comic->slug;

       }else{
        $form_data['slug'] = Comic::generateSlug($form_data['title']);
       }
       $comic->update($form_data);
       return redirect()->route('comics.show' , $comic);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Comic $comic)
    {
        // elimino l'entità
        $comic->delete();
        // reindirizzo alla pagina dei prodotti e metto in sessione il messaggio di conferma nella variabile 'deleted'
        return redirect()->route('comics.index')->with('deleted' , "Il fumetto $comic->title è stato eliminato correttamente");
    }
}
