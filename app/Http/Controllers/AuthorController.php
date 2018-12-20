<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Author;
use Session;

class AuthorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct() 
    {
        $this->middleware('auth');
    }
    public function index()
    {
        $authors = Author::all();
        return view('authors.index')->withAuthors($authors);
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
    public function store(Request $request)
    {
        $this->validate($request, array(
            'name' => 'required|max:255',
            'birthday' => 'required',
            'gender' => 'required',
            'email' => 'required'
        ));

        $author = new Author;
        $author->name = $request->name;
        $author->birthday = $request->birthday;
        $author->gender = $request->gender;
        $author->email = $request->email;
        $author->save();

        Session::flash('success', 'New author was successfully created!');

        return redirect()->route('authors.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $author = Author::find($id);
        return view('authors.show')->withAuthor($author);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $author = Author::find($id);
        return view('authors.edit')->withAuthor($author);
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
        $author = Author::find($id);

        $this->validate($request, ['name' => 'required|max:255']);

        $author->name = $request->name;

        $author->save();

        Session::flash('success', 'Author was successfully updated!');

        return redirect()->route('authors.show', $author->id);
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
        $author->products()->detach();

        $author->delete();

        Session::flash('success', 'Author was deleted successfully.');
        
        return redirect()->route('authors.index');
    }
}
