<?php

namespace App\Http\Controllers;
use App\Models\RealEstateWebsite;
use App\Models\popularlocation;
use Illuminate\Http\Request;

class indexController extends Controller
{
  public function index()
{
    $crud = RealEstateWebsite::all();
    $locations = popularlocation::all();

    return view('index', compact('crud', 'locations'));
}

    function indexpost(Request $request){
        //  @dd($request);
        $crud = new RealEstateWebsite();
       $image = $request->file('image');
        $imagename = time() . '.' . $image->getClientOriginalExtension();
        $image->move(public_path('upload/'), $imagename);
        $crud->image = $imagename;
        $crud->price = $request->price;
        $crud->tittle = $request->tittle;
        $crud->save();
    }

     
      


}
