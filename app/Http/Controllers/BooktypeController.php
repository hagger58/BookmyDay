<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Booktype;
use Session;

class BooktypeController extends Controller
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
        $booktypes = Booktype::all();
        return view('booktypes.index')->withBooktypes($booktypes);
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
        $this->validate($request, array('name' => 'required|max:255'));

        $booktype = new Booktype;
        $booktype->name = $request->name;
        $booktype->save();

        Session::flash('success', 'New booktype was successfully created!');

        return redirect()->route('booktypes.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $booktype = Booktype::find($id);
        return view('booktypes.show')->withBooktype($booktype);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $booktype = Booktype::find($id);
        return view('booktypes.edit')->withBooktype($booktype);
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
        $booktype = Booktype::find($id);

        $this->validate($request, ['name' => 'required|max:255']);

        $booktype->name = $request->name;

        $booktype->save();

        Session::flash('success', 'Booktype was successfully updated!');

        return redirect()->route('booktypes.show', $booktype->id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $booktype = Booktype::find($id);
        $booktype->products()->detach();

        $booktype->delete();

        Session::flash('success', 'Booktype was deleted successfully.');
        
        return redirect()->route('booktypes.index');
    }
}
