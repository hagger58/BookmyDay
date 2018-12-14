<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Product;
use Session;
use App\Category;
use App\Author;
use App\Booktype;
use App\Sub_Category;
use App\Genre;
use Image;
use Storage;

class ProductController extends Controller
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
        $products = Product::orderBy('id', 'desc')->paginate(10);
        $authors = Author::orderby('id', 'desc')->paginate(10);
       //return a view and pass in the above variable
       return view('products.index')
        ->withProducts($products)
        ->withAuthors($authors);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Category::all();
        $subcategories = Sub_Category::all();
        $genres = Genre::all();
        $authors = Author::all();
        $booktypes = Booktype::all();

        return view('products.create')->withCategories($categories)->withSubcategories($subcategories)->withGenres($genres)->withAuthors($authors)->withBooktypes($booktypes);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //validation
        $this->validate($request, array(
            'title' => 'required|max:255',
            'ISBN' => 'required|max:20|min:10|unique:products,ISBN',
            'category_id' => 'required|integer',
            'subcategory_id' => 'required|integer',
            'abstract' => 'required|min:20',
            'featured_image' => 'sometimes|image|max:10240',
            'price' => 'required|integer'

        ));
        //store in the database
        
        $product = new Product;

        $product->title = $request->title;
        $product->ISBN = $request->ISBN;
        $product->category_id = $request->category_id;
        $product->subcategory_id = $request->subcategory_id;
        $product->abstract = $request->abstract;
        $product->price = $request->price;
        
        //save our image
        if ($request->hasFile('featured_image')) {
            $image = $request->file('featured_image');
            $filename = time() . '.' . $image->getClientOriginalExtension();
            $location = public_path('images/' . $filename);
            image::make($image)->resize(600, 960)->save($location);

            $product->image = $filename;
        }

        $product->save();

        $product->genres()->sync($request->genres, false);
        $product->authors()->sync($request->authors, false);
        $product->booktypes()->sync($request->booktypes, false);
        Session::flash('success', 'The product was successfully created.');
        return redirect()->route('products.show', $product->id);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $product = Product::find($id);
        return view('products.show')->withProduct($product);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $product = Product::find($id);

        $categories = Category::all();
        $cats = array();
        foreach ($categories as $category) {
            $cats[$category->id] = $category->name;
        }
        $subcategories = Sub_Category::all();
        $subcats = array();
        foreach ($subcategories as $subcategory) {
            $subcats[$subcategory->id] = $subcategory->name;
        }
        
        $genres = Genre::all();
        $genres2 = array();
        foreach ($genres as $genre) {
            $genres2[$genre->id] = $genre->name;
        }

        $authors = Author::all();
        $authors2 = array();
        foreach ($authors as $author) {
            $authors2[$author->id] = $author->name;
        }
        
        $booktypes = Booktype::all();
        $booktypes2 = array();
        foreach ($booktypes as $booktype) {
            $booktypes2[$booktype->id] = $booktype->name;
        }
        //Return the view and pass in the variable we previously created
        return view('products.edit')->withProduct($product)->withCategories($cats)->withGenres($genres2)->withAuthors($authors2)->withBooktypes($booktypes2)->withSubcategories($subcats);
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
        // Validate the data
        $product = Product::find($id);
        
        $this->validate($request, array(
            'title' => 'required|max:255',
            'ISBN' => "required|max:20|min:10|unique:products,ISBN,$id",
            'category_id' => 'required|integer',
            'subcategory_id' => 'required|integer',
            'abstract' => 'required|min:20',
            'featured_image' => 'image'
        ));
        
        // Save the data to the database
        $product = Product::find($id);

        $product->title = $request->input('title');
        $product->ISBN = $request->input('ISBN');
        $product->category_id = $request->input('category_id');
        $product->subcategory_id = $request->input('subcategory_id');
        $product->abstract = $request->input('abstract');

        if($request->hasFile('featured_image')) {
            
            //add the new photo
            $image = $request->file('featured_image');
            $filename = time() . '.' . $image->getClientOriginalExtension();
            $location = public_path('images/' . $filename);
            image::make($image)->resize(600, 960)->save($location);
            $oldFilename = $product->image;
                        
            //update the database
            $product->image = $filename;
            //delete the old photo
            Storage::delete($oldFilename);
        }

        $product->save();

        if(isset($request->genres)) {
        $product->genres()->sync($request->genres, true);
        }
        else {
            $product->genres()->sync(array());
        }

        if(isset($request->authors)) {
            $product->authors()->sync($request->authors, true);
            }
            else {
                $product->authors()->sync(array());
            }

        if(isset($request->booktypes)) {
            $product->booktypes()->sync($request->booktypes, true);
            }
            else {
                $product->booktypes()->sync(array());
            }
    
        Session::flash('success', 'The product was successfully updated.');
        //Redirect to products.show
        return redirect()->route('products.show', $product->id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $product = Product::find($id);
        $product->genres()->detach();
        $product->authors()->detach();
        $product->booktypes()->detach();

        $product->delete();
        Session::flash('success', 'The product was successfully deleted.');
        return redirect()->route('products.index');
    }
}
