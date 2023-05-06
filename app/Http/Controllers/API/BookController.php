<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Http\Requests\GuardarBookRequest;
use App\Http\Requests\ActualizarBookRequest;
use App\Models\Book;
use Illuminate\Http\Request;

class BookController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return Book::all();
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(GuardarBookRequest $request)
    {
        Book::create($request->all());
        return response()->json(['res' =>true, 'msg' =>'Book guardado correctamente'],200);
    }

    /**
     * Display the specified resource.
     */
    public function show(Book $book)
    {
        return response()->json(['res'=>true, 
        'book' => $book    
    ],200);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(ActualizarBookRequest $request, Book $book)
    {
        $book->update($request->all());
        return response()->json(['res' =>true, 'msg' =>'Book modificado correctamente'],200);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Book $book)
    {
        $book->delete();
        return response()->json(['res' =>true, 'msg' =>'Book eliminado correctamente'],200);
    }
}
