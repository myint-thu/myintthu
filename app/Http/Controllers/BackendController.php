<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BackendController extends Controller
{
	 // public function backendtemplatefun($value='')
  //    {
  //         return view('backendtemplate');
  //    }
      public function dashboardfun($value='')
     {
          return view('backend.dashboard');
     }
     //  public function createfun($value='')
     // {
     //      return view('backend.items.create');
     // }
     // start brand
     //  public function createfun($value='')
     // {
     //      return view('backend.brands.create');
     // }
     // // end brand
     // // start category
     //  public function createfun($value='')
     // {
     //      return view('backend.categories.create');
     // }
     // // end category
     // // start subcategories
     // public function createfun($value='')
     // {
     //      return view('backend.subcategories.create');
     // }
     // end subcategories

}
