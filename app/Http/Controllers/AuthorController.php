<?php

namespace App\Http\Controllers;
use App\Author;
use Illuminate\Http\Request;

class AuthorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $authors = Author::all();

        return view('authors.index', compact('authors'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('authors.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $request->all();
        
        $request->validate([
            "name" => "required|max:20",
            "lastname" => "required|max:30", 
            "date_of_birth" => "required|date_format:Y-m-d", 
        ]);

        $newAuthor = new Author;
        $newAuthor->name = $data["name"];
        $newAuthor->lastname = $data["lastname"];
        $newAuthor->date_of_birth = $data["date_of_birth"];
        $newAuthor->save();

        return redirect()->route("authors.index");
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $author = Author::find($id); // SELECT * FROM authors WHERE id = $id;
      
        return view ('authors.show', compact('author'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $author = Author::find($id); // SELECT * FROM authors WHERE id = $id;
      
        return view ('authors.edit', compact('author'));
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
        $data = $request->all();
        
        $request->validate([
            "name" => "required|max:20",
            "lastname" => "required|max:30", 
            "date_of_birth" => "required|date_format:Y-m-d"
        ]);

        $author = Author::find($id);
        
        $author->update($data);

        return redirect()->route('authors.show', $author);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $author = Author::find($id);

        $author->delete();

        return redirect()->route('authors.index');
    }
}
