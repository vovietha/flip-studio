<?php

namespace App\Http\Controllers;

use App\Models\Catalog;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products = Product::with('catalog')->get();
        return view('admin.Products.indexProduct',compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $catalogs = Catalog::all();
        return view('admin.Products.addProduct',compact('catalogs'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // $input = $request->all();
        // Product::create($input);
        // return redirect()->back();

        $products = new Product();
        $products->catalog_id = $request->input('catalog_id');
        $products->title = $request->input('title');
        $products->description = $request->input('description');
        $products->details = $request->input('details');
        $products->price = $request->input('price');
        if ($request->hasfile('thumbnail'))
        {
            $file = $request->file('thumbnail');
            $extension = $file->getClientOriginalExtension();
            $filename = time().'.'.$extension;
            $file->move('uploads/products-img', $filename);
            $products->thumbnail = $filename;

        }
        $products->sku = $request->input('sku');
        $products->stock = $request->input('stock');
        $products->save();
        return redirect()->back();
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
        $products = Product::find($id);
        return view('admin.Products.editProduct', compact('products'));
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
        $products = Product::find($id);
        $products->catalog_id = $request->input('catalog_id');
        $products->title = $request->input('title');
        $products->description = $request->input('description');
        $products->details = $request->input('details');
        $products->price = $request->input('price');
        if ($request->hasfile('thumbnail'))
        {
            $destination = 'uploads/products-img'.$products->thumbnail;
            if (File::exists($destination))
            {
                File::delete($destination);
            }
            $file = $request->file('thumbnail');
            $extension = $file->getClientOriginalExtension();
            $filename = time().'.'.$extension;
            $file->move('uploads/products-img', $filename);
            $products->thumbnail = $filename;

        }
        $products->sku = $request->input('sku');
        $products->stock = $request->input('stock');
        $products->update();
        return redirect()->route('products.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $products = Product::find($id);
        $destination = 'uploads/products-img'.$products->thumbnail;
        if (File::exists($destination))
        {
            File::delete($destination);
        }
        $products->delete();
        return redirect()->back();
    }
}
