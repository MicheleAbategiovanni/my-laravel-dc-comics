<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreComicRequest;
use App\Http\Requests\UpdateComicRequest;
use App\Models\Comic;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class ComicController extends Controller
{

    private $validationRules = [
        "title" => "required|min:10|max:255",
        "description" => "required|string",
        "price" => "required|decimal:2",
        "thumb" => "required|string|url",
        "series" => "required|string",
        "sale_date" => "required|date|string",
        "type" => "required|string",
    ];

    public function home(){

        $comics = Comic::all();

        return view("admin.dashboard", compact('comics'));
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $comics = Comic::all();

        return view("index", compact('comics'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("admin.comics.create");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreComicRequest $request)
    {
        $data = $request->validated();

        $comic = Comic::create($data);

        return redirect()->route("comics.show", $comic->id);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Comic $comic)
    {
        return view("comics.show", compact('comic'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Comic $comic)
    {
       

        return view("admin.comics.edit", compact('comic'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateComicRequest $request, Comic $comic)
    {
        $data = $request->validated();

        $comic->update($data);

        return redirect()->route("comics.show", $comic);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $comic = Comic::findOrFail($id);

        $comic->delete();

        return redirect()->route("comics.index");
    }

    private function validation($data)
    {
        $result = Validator::make($data, [
            "title" => "required|min:10|max:255",
            "description" => "required|string",
            "price" => "required|decimal:2",
            "thumb" => "required|string|url",
            "series" => "required|string",
            "sale_date" => "required|date|string",
            "type" => "required|string",
        ], [
            "title.required" => "Il titolo è obbligatorio",
            "title.min" =>  "Il titolo deve avere almeno :min caratteri",
            "title.max" =>  "Il titolo deve avere massimo :max caratteri",
            "description.required" => "Il contenuto è obbligatorio",
            "price.required" => "Il prezzo è obbligatorio",
            "thumb.required" => "La copertina è obbligatoria",
            "series.required" => "Il nome della serie è obbligatorio",
            "sale_date.required" => "La data d'uscita è obbligatorio",
            "type.required" => "Il tipo è obbligatorio",
        ])->validate();

        return $result;
    }
}
