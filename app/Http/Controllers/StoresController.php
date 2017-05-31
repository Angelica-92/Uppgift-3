<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Store;

class StoresController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $stores = Store::all();
      return view("stores.storesindex", [
      "stores" => $stores,
      ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
      return view("stores.storescreate");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      $store = new Store;
      $store->name = $request->input("name");
      $store->city = $request->input("city");
      $store->save();
      return redirect()->action('StoresController@index')->with('status', 'Affären är sparad!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
      $store = Store::find($id);
      return view("stores.show", [
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
      $store = Store::find($id);
      return view("stores.storesedit", [
       "store" => $store
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
      $store = Store::find($id);
      $store->name = $request->input("name");
      $store->city = $request->input("city");
      $store->save();
      return redirect()->action('StoresController@index')->with('status', 'Affären är nu uppdaterad!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
      Store::destroy($id);
      return redirect()->action('StoresController@index')->with('status', 'Affären är raderad!');
    }
}
