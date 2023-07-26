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

    // public function viewcategory($slug)
    // {
    //     $catalog = Catalog::where('slug', $slug)->firstOrFail();
    //     $products = Product::where('catalog_id', $catalog->id)->get();
    //     return view('user.shop',compact('catalog','products'));   
    // }

    public function viewcategory($slug)
    {
        if ($slug === 'all-products') {
            // If the slug is 'all-products', get all products without filtering by a specific category
            $products = Product::all();
            $catalog = Catalog::where('slug', $slug)->firstOrFail();
        } else {
            // If it's not 'all-products', then proceed with the normal behavior
            $catalog = Catalog::where('slug', $slug)->firstOrFail();
            $products = Product::where('catalog_id', $catalog->id)->get();
        }

        return view('user.shop', compact('products', 'catalog'));
    }

    public function viewproducts($cate_slug, $prod_title) 
    {
        if (Catalog::where('slug',$cate_slug)->exists())
        {
            if (Product::where('title',$prod_title)->exists())
            {
                $products = Product::where('title',$prod_title)->first();
                return view('user.detailProduct', compact('products'));
            } else {
                return redirect('shop');
            }
        } else {
            return redirect('shop');
        }
        // $catalog = Catalog::where('slug', $slug)->firstOrFail();
        // $products = Product::where('catalog_id', $catalog->id)->get();
        // return view('user.detailProduct',compact('catalog','products'));   
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
