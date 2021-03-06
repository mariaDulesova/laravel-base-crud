<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Comic;
use Illuminate\Support\Str;
use Illuminate\Validation\Rule;

class ComicController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $comics = Comic::paginate(10);
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
        $slug=$request->get('title');
        $request->request->add(["slug" =>Str::slug($slug, '-')]); //si mette con la validation
        $data=$request->all();

        //0. Validazione dei dati
        $request->validate(
            [
                'title'=>'required|max:100',
                'description'=>'required',
                'thumb' => 'required|max:300',
                'price' => 'required|numeric|min:0.01|max:999.99',
                'series' => 'required|200',
                'date'=>'required',
                'type' => 'required|max:100',
                'slug' => 'unique:comics'
            ]
        );


        //1. Creare una nuova istanza
        $comic = new Comic();

        //2. Assegnare valori
        // $slug = $comic['title'];
        // $comic->slug = Str::slug($slug, '-'); //senza la validation
        $comic->fill($data); //IMPORTANTE: per utilizzare il fill(), bisogna aggiungere $fillable nel model 

        //3. Salvare istanza
        $comic->save();

        return redirect()->route('comics.show', $comic->id);

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $comic = Comic::findOrFail($id);
        return view('comics.show', compact('comic'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $comic = Comic::findOrFail($id);
        return view('comics.edit', compact('comic'));

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
        $data=$request->all();
        $comic = Comic::findOrFail($id);
        $slug = $comic['title'];
        $comic->slug = Str::slug($slug, '-');
        $comic->update($data); //ricordarsi di aggiungere fillable() nel model
        return redirect()->route('comics.show', $comic->id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $comic=Comic::findOrFail($id);
        $comic->delete();
        return redirect()->route('comics.index')->with('deleted', $comic->title . 'has been deleted successfully');
    }
}
