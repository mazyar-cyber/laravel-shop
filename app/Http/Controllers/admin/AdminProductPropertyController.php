<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\ProductPropertyRequest;
use App\Http\Requests\ProductPropertyUpdateRequest;
use App\Models\ProductProperty;
use Illuminate\Contracts\Validation\Validator;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use function GuzzleHttp\Promise\all;

class AdminProductPropertyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $properties = ProductProperty::all();
        return view('admin.ProductProperty.index', compact('properties'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.ProductProperty.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(ProductPropertyRequest $request)
    {
        $property = new ProductProperty();
        $property->title = $request->title;
        $property->type = $request->type;
        $property->save();
        return redirect()->back();
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
        $property = ProductProperty::find($id);
        return view('admin.ProductProperty.edit', compact('property'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function update(ProductPropertyUpdateRequest $request, $id)
    {
        $property = ProductProperty::find($id);
        $property->title = $request->title;
        $property->type = $request->type;
        $property->save();
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

    }

    public function deleteAll(Request $request)
    {
        foreach ($request->checkBoxArray as $id) {
            $prop = ProductProperty::find($id);
            $prop->delete();
        }
        return redirect()->back();
    }
}
