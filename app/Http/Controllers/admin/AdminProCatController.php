<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\ProCatRequest;
use App\Models\ProCat;
use Illuminate\Http\Request;
use MongoDB\Driver\Session;

class AdminProCatController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $procats = ProCat::all();
        return view('admin.ProCat.index', compact('procats'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $mainCats = ProCat::with('categoryRecursive')->where('parent_id', null)->get();
        return view('admin.ProCat.create', compact('mainCats'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(ProCatRequest $request)
    {
        $procat = new ProCat();
        $procat->name = $request->name;
        if ($request->parent_id == 0) {
            $procat->parent_id = null;
        } else {
            $procat->parent_id = $request->parent_id;
        }
        $procat->meta_description = '$request->meta_description';
        $procat->meta_title = '$request->meta_description';
        $procat->meta_keywords = '$request->meta_description';
        $procat->save();
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

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     * @return int
     */
    public function edit($id)
    {
        $cat=ProCat::findOrfail($id);
        $mainCats = ProCat::with('categoryRecursive')->where('parent_id', null)->get();
        return view('admin.ProCat.edit',compact(['cat','mainCats']));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $procat = ProCat::find($id);
        $procat->name = $request->name;
        if ($request->parent_id == 0) {
            $procat->parent_id = null;
        } else {
            $procat->parent_id = $request->parent_id;
        }
        $procat->save();
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
        $procat = ProCat::find($id)->delete();
        return redirect()->back();
    }

    public function deleteAll()
    {
        $procat = ProCat::all();
        foreach ($procat as $cat) {
            $cat->delete();
        }
        return redirect()->back();
    }

    public function selectedDelete(Request $request)
    {
        if ($request->checkBoxArray == 'اعمال') {
            return redirect()->back();
        }
        foreach ($request->checkBoxArray as $catId) {
            $cat = ProCat::findOrfail($catId);
            if ($cat->childrenRecursive!=null){
                \Illuminate\Support\Facades\Session::flash('subcat','دسته بندی حذف نمیشود، چون دارای زیر دسته است');
                return redirect()->back();
            }
            $cat->delete();
        }
        return redirect()->back();
    }
}
