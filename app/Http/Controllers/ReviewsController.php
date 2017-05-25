<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Review;
use App\Product;

class ReviewsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $reviews = Review::all();
      return view("products.reviewsindex", [
      "reviews" => $reviews
      ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
      $products = Product::all();
      return view("products.reviewscreate", [
      "products" => $products,
      ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      $review = new Review;
      $review->product_id = $request->input("product_id");
      $review->comment = $request->input("comment");
      $review->rating = $request->input("rating");
      $review->save();
      return redirect()->action('ReviewsController@index')->with('status', 'Kommentaren är sparad!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
      $review = Review::find($id);
      return view("products.show", [
       "review" => $review,
     ]);
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
      return view("products.reviewsedit", [
       "review" => $review
     ]);
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
      $review->comment = $request->input("comment");
      $review->rating = $request->input("rating");
      $review->save();
      return redirect()->action('ReviewsController@index')->with('status', 'Kommentaren är nu uppdaterad!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
      Review::destroy($id);
      return redirect()->action('ReviewsController@index')->with('status', 'kommentaren är raderad!');
    }
}
