<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\SubCategory;
use Illuminate\Http\Request;

class SubCategoryController extends Controller
{
    public function index()
    {
        return view('admin.subcategory.index', ['categories' => Category::all()]);
    }
    public function create(Request $request)
    {
        SubCategory::newSubCategory($request);
        return back()->with('message','SubCategory Create info Successfully');
    }
    public function manage()
    {
        return view('admin.subcategory.manage', ['sub_categories' => SubCategory::all()]);
    }
    public function edit($id)
    {
        return view('admin.subcategory.edit', [
            'sub_category' => SubCategory::find($id),
            'categories' => Category::all(),
        ]);
    }
    public function update(Request $request,$id)
    {
        SubCategory::updateSubCategory($request,$id);
        return redirect('/subcategory/manage')->with('message','SubCategory Update info Successfully');
    }
    public function delete($id)
    {
        SubCategory::deleteSubCategory($id);
        return redirect('/subcategory/manage')->with('message','SubCategory Delete info Successfully');
    }
}
