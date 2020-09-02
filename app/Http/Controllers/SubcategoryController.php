<?php

namespace App\Http\Controllers;
use App\Category;
use App\Subcategory;
use Illuminate\Http\Request;

class SubcategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
         $subcategories = Subcategory::all();
        // dd($items);

        return view('backend.subcategories.index',compact('subcategories'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // $brands = Brand::all();
          $categories = Category::all();

          return view('backend.subcategories.create',compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            // "codeno" => 'required|min:4',
            "name" => 'required',
            // "photo" => 'required',
            // "price" => 'required',
            // "discount" => 'required',
            // "description" => 'required',
            // "brand" => 'required',
            "categories" => 'required'
        ]);
        // If include file, upload file
            // $imageName = time().'.'.$request->photo->extension();
            // $request->photo->move(public_path('backend/itemimg'),$imageName);
            // $path = 'backend/itemimg/'.$imageName;
        // Data insert
            $subcategory = new Subcategory;
            // tablecolumnname        formname
            // $item->codeno = $request->codeno;
            $subcategory->name = $request->name;
            // $item->photo = $path;
            // $item->price = $request->price;
            // $item->discount = $request->discount;
            // $item->description = $request->description;
            // $item->brand_id = $request->brand;
            $subcategory->category_id = $request->categories;
            $subcategory->save();


        // redirect
            return redirect()->route('subcategories.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Subcategory  $subcategory
     * @return \Illuminate\Http\Response
     */
    public function show(Subcategory $subcategory)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Subcategory  $subcategory
     * @return \Illuminate\Http\Response
     */
    public function edit(Subcategory $subcategory)
    {
        // $brands = Brand::all();
        $categories = Category::all();
        return view('backend.subcategories.edit',compact('categories','subcategory'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Subcategory  $subcategory
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Subcategory $subcategory)
    {
        $request->validate([
            // "codeno" => 'required|min:4',
            "name" => 'required',
            // "photo" => 'sometimes',
            // "oldphoto" => 'required',
            // "price" => 'required',
            // "discount" => 'required',
            // "description" => 'required',
            // "brand" => 'required',
            "categories" => 'required'
        ]);
        //file upload, if data
            // if($request->hasFile('photo')){
            //         $imageName = time().'.'.$request->photo->extension();
            //         $request->photo->move(public_path('backend/itemimg'),$imageName);
            //         $path = 'backend/itemimg/'.$imageName;
            // }else{
            //         $path = $request->oldphoto;
            // }
        //data update
            // $item->codeno = $request->codeno;
            $subcategory->name = $request->name;
            // $item->photo = $path;
            // $item->price = $request->price;
            // $item->discount = $request->discount;
            // $item->description = $request->description;
            // $item->brand_id = $request->brand;
            $subcategory->category_id = $request->categories;
            $subcategory->save();
        //redirect
            return redirect()->route('subcategories.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Subcategory  $subcategory
     * @return \Illuminate\Http\Response
     */
    public function destroy(Subcategory $subcategory)
    {
        //
    }
}
