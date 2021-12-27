<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;
use App\Http\Requests\StoreCategoryRequest;
use App\Http\Requests\UpdateCategoryRequest;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categories = Category::all();
        return view("pages.category.manage_category", compact("categories"));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("pages.category.manage_category_create");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreCategoryRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'category_name'=>'required',
            'category_image'=>'required'
        ],
        [
            'category_name.required'=>'هذا الحقل مطلوب',
            'category_image.required'=>'هذا الحقل مطلوب'
        ]
);
        $image = 'IMG'.'-'.time().'.'.$request->category_image->extension();
        $request->category_image->move(public_path('black/img'),$image);
        Category::create([
            'category_name'=>$request->category_name,
            'category_image'=>$image
        ]);
        $categories = Category::all();
        return view("pages.category.manage_category", compact("categories"));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function show(Category $category)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $category=Category::where('category_id',$id)->first();
        return view("pages.category.manage_category_edit",compact("category"));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateCategoryRequest  $request
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$id)
    {
        $request->validate([
            'category_name'=>'required',
            'category_image'=>'required'
        ]);
        $image = 'IMG'.'-'.time().'.'.$request->category_image->extension();
        $request->category_image->move(public_path('black/img'),$image);
        Category::where('category_id',$id)->update([
            'category_name'=>$request->category_name,
            'category_image'=>$image
        ]);
        // $categories = Category::all();
        return redirect('admin/manage_categories');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function destroy($category)
    {
        Category::where('category_id',$category)->delete();
        // $categories = Category::all();
        // return view("pages.category.manage_category", compact("categories"));
        return redirect('admin/manage_categories')->with('success','تم حذف الصنف بنجاح');
    }
}
