<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Review;
use App\Product;
use Session;

class ReviewController extends Controller
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
        //
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
    public function store(Request $request, $product_id)
    {
        $this->validate($request, array(
            'title' => 'required|max:100',
            'name'=>'required|max:255',
            'email'=>'required|max:255',
            'rating' => 'required|integer',
            'review'=>'required|max:2000'
        ));

        $product = Product::find($product_id);

        $review = new Review();

        $review->title = $request->title;
        $review->name = $request->name;
        $review->email = $request->email;
        $review->rating = $request->rating;
        $review->review = $request->review;
        $review->product()->associate($product);

        $review->save();

        Session::flash('success', 'Review was successfully submitted!');

        return redirect()->route('book.single', [$product->id]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $review = Review::find($id);
        return view('reviews.edit')->withReview($review);
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
        $review = Review::find($id);

        $this->validate($request, array(
            'title' => 'required|max:100',
            'name'=>'required|max:255',
            'email'=>'required|max:255',
            'rating' => 'required|integer',
            'review'=>'required|max:2000'
        ));

        $review->title = $request->title;
        $review->name = $request->name;
        $review->email = $request->email;
        $review->rating = $request->rating;
        $review->review = $request->review;
        $review->save();

        Session::flash('success', 'review updated');

        return redirect()->route('products.show', $review->product->id);
    }
        
    public function delete($id)
    {
        $review = Review::find($id);
        return view('reviews.delete')->withReview($review);
    }
    

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $review = Review::find($id);

        $product_id = $review->product_id;
        $review->delete();

        Session::flash('success', 'U have successfully deleted the review');
        return redirect()->route('products.show', $product_id);
    }
}
