<?php

namespace App\Http\Controllers;

use App\Models\Catalog;
use Illuminate\Http\Request;

class CatalogController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $catalogs = Catalog::root()->get();
        return view('admin.Catalog.category', [
            'catalogs' => $catalogs
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.Catalog.addCategory');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $catalogs = new Catalog;
        $catalogs->name = $request->input('name');
        $catalogs->detail = $request->input('detail');
        $catalogs->save();
        return redirect()->back()->with('status','Catalog added successfully');

        // ADD FILE IMG LÊN DATABASE
        // if ($request->hasfile('img')); //img của attribute name input
        // {
        //     $file = $request->file('img');
        //     $extension = $file->getClientExtension();
        //     $filename = time() . '.' . $extension;
        //     $file->move('uploads/img/', $filename);
        //     $file->img = $filename; //img ở đây là tên cột trong database
        // }
        // $catalogs->save();
        // return redirect()->back()->with('status','img added');
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
        $catalogs = Catalog::find($id);
        $catalogs->delete();
        return redirect()->back();
    }
}
