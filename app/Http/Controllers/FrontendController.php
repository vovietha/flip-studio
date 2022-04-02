<?php

namespace App\Http\Controllers;

use App\Models\Catalog;
use App\Models\Product;
use Illuminate\Http\Request;

class FrontendController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $catalogs = Catalog::all();
        return view('user.shop', compact('catalogs'));
    }
    public function viewcategory($id)
    {
        if(Catalog::where('id', $id)->exists())
        {
            $catalogs = Catalog::all('id', $id);
            $products = Product::all('catalog_id', $catalogs->id);
            return view('user.shop',compact('catalogs','products'));
        }
        else 
        {
            return redirect()->back();
        }
    }
    // public function catalogs()
    // {
    //     $catalogs = Catalog::all();
    //     return view('user.shop.allIndex', compact('catalogs'));
    // }
    // public function armchairs()
    // {
    //     $catalogs = Catalog::where('name','armchairs')->get();
    //     return view('user.shop', compact('catalogs'));
    // }

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
        //
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
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}