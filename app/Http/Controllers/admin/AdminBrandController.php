<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\BrandRequest;
use App\Http\Requests\BrandUpdateRequest;
use App\Models\Brands;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use MongoDB\Driver\Session;

class AdminBrandController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $brands = Brands::all();
        return view('admin.Brand.index', compact('brands'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.Brand.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(BrandRequest $request)
    {
        $brand = new Brands();
        $brand->name = $request->name;
        $brand->description = $request->description;
        $file = $request->file('file');
        $filename = time() . $file->getClientOriginalName();
        Storage::disk('local')->putFileAs('public/photos/brand', $file, $filename);
        $brand->photo_path = $filename;
        $brand->save();
        \Illuminate\Support\Facades\Session::flash('brand-save', "برند ذخیره شد");
        return redirect()->back();
    }

    public function Uploader(Request $request)
    {
        $file = $request->file('file');
        $filename = time() . $file->getClientOriginalName();
        Storage::disk('local')->putFileAs('photos', $file, $filename);
    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $brand = Brands::find($id);
        return view('admin.Brand.edit', compact('brand'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function update(BrandUpdateRequest $request, $id)
    {
        $brand = Brands::find($id);
        $brand->name = $request->name;
        $brand->description = $request->description;
        if ($request->file('file')) {
            $file = $request->file('file');
            $filename = time() . $file->getClientOriginalName();
            @unlink("/storage/photos/brand/$brand->photo_path");
            Storage::disk('local')->putFileAs('public/photos/brand', $file, $filename);
            $brand->photo_path = $filename;
        }
        $brand->save();
        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function selectedDestroy(Request $request)
    {
        foreach ($request->checkBoxArray as $id) {
            $brand = Brands::find($id);
            unlink("storage/photos/brand/$brand->photo_path");
            $brand->delete();
        }
        return redirect()->back();
    }
}
