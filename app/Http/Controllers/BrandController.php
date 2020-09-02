<?php

namespace App\Http\Controllers;
use App\Brand;
use Illuminate\Http\Request;

class BrandController extends Controller
{
     /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $brands = Brand::all();
        // dd($items);

        return view('backend.brands.index',compact('brands'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
          $brands = Brand::all();
          // $subcategories = Subcategory::all();

          return view('backend.brands.create',compact('brands'));

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
            // "price" => 'required',
            // "discount" => 'required',
            // "description" => 'required',
            // "brand" => 'required',
            // "subcategories" => 'required'
        ]);
        // If include file, upload file
            $imageName = time().'.'.$request->photo->extension();
            $request->photo->move(public_path('backend/itemimg'),$imageName);
            $path = 'backend/itemimg/'.$imageName;
        // Data insert
            $brand = new Brand;
            // tablecolumnname        formname
            // $->codeno = $request->codeno;
            $brand->name = $request->name;
            $brand->photo = $path;
            // $item->price = $request->price;
            // $item->discount = $request->discount;
            // $item->description = $request->description;
            // $item->brand_id = $request->brand;
            // $item->subcategory_id = $request->subcategories;
            $brand->save();


        // redirect
            return redirect()->route('brands.index');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Item  $item
     * @return \Illuminate\Http\Response
     */
    public function show(Item $item)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Item  $item
     * @return \Illuminate\Http\Response
     */
    public function edit(Brand $brand)
    {
        $brands = Brand::all();
        // $subcategories = Subcategory::all();
        return view('backend.brands.edit',compact('brands','brand'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Item  $item
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Brand $brand)
    {
        //dd($request);
        //validation
        $request->validate([
            // "codeno" => 'required|min:4',
            "name" => 'required',
            "photo" => 'sometimes',
            "oldphoto" => 'required'
            // "price" => 'required',
            // "discount" => 'required',
            // "description" => 'required',
            // "brand" => 'required',
            // "subcategories" => 'required'
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
            $brand->name = $request->name;
            $brand->photo = $path;
            // $item->price = $request->price;
            // $item->discount = $request->discount;
            // $item->description = $request->description;
            // $item->brand_id = $request->brand;
            // $item->subcategory_id = $request->subcategories;
            $brand->save();
        //redirect
            return redirect()->route('brands.index');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Item  $item
     * @return \Illuminate\Http\Response
     */
    public function destroy(Item $item)
    {
        //
    }
}
