<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use App\Store;
use App\Review;


class ProductsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $products = Product::all();
      return view("products.index", [
      "products" => $products,
      ]);
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
      $stores = Store::all();
      return view("products.create", [
      "stores" => $stores,
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
      $product = new Product;
      $product->album = $request->get("album");
      $product->title = $request->get("title");
      $product->price = $request->get("price");
      $product->image = $request->get("image");
      $product->save();
      return redirect()->action('ProductsController@index')->with('status', 'Produkten är sparad!');
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
      $review = Review::find($id);
      $store = Store::find($id);
      return view("products.show", [
       "product" => $product,
       "review" => $review,
       "store" => $store
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
      $product = Product::find($id);
      return view("products.edit", [
       "product" => $product
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
      $product = Product::find($id);
      $product->album = $request->get("album");
      $product->title = $request->get("title");
      $product->price = $request->get("price");
      $product->image = $request->get("image");
      $product->save();
      return redirect()->action('ProductsController@index')->with('status', 'Produkten är nu uppdaterad!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
      Product::destroy($id);
      return redirect()->action('ProductsController@index')->with('status', 'Produkten är raderad!');
    }
}
