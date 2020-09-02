<?php

namespace App\Http\Controllers;

use App\Category;
use Illuminate\Http\Request;

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
        // dd($items);

        return view('backend.categories.index',compact('categories'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
         $categories = Category::all();
          // $subcategories = Subcategory::all();

          return view('backend.categories.create',compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // dd($request);

        // Validation
        $request->validate([
            // "codeno" => 'required|min:4',
            "name" => 'required',
            "photo" => 'required'
            
        ]);
        // If include file, upload file
            $imageName = time().'.'.$request->photo->extension();
            $request->photo->move(public_path('backend/itemimg'),$imageName);
            $path = 'backend/itemimg/'.$imageName;
        // Data insert
            $category = new Category;
            // tablecolumnname        formname
            // $->codeno = $request->codeno;
            $category->name = $request->name;
            $category->photo = $path;
            
            $category->save();


        // redirect
            return redirect()->route('categories.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function show(Category $category)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function edit(Category $category)
    {
        $categories = Category::all();
        // $subcategories = Subcategory::all();
        return view('backend.categories.edit',compact('categories','category'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Category $category)
    {
        //dd($request);
        //validation
        $request->validate([
            // "codeno" => 'required|min:4',
            "name" => 'required',
            "photo" => 'sometimes',
            "oldphoto" => 'required'
            
        ]);
        //file upload, if data
            if($request->hasFile('photo')){
                    $imageName = time().'.'.$request->photo->extension();
                    $request->photo->move(public_path('backend/itemimg'),$imageName);
                    $path = 'backend/itemimg/'.$imageName;
            }else{
                    $path = $request->oldphoto;
            }
        //data update
            // $item->codeno = $request->codeno;
            $category->name = $request->name;
            $category->photo = $path;
            
            $category->save();
        //redirect
            return redirect()->route('categories.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function destroy(Category $category)
    {
        //
    }
}
