<?php

namespace App\Http\Controllers\admin;
use App\Models\RealEstateWebsite;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class tablescontroller extends Controller
{
      public function tables(){
        $crud = RealEstateWebsite::all();
        return view('admin.tables' , compact('crud'));
    }
      function delete($id) {
        $crud = RealEstateWebsite::find($id);
        $crud->delete();
        return redirect()->back();
    }


public function update(Request $request, $id)
{
    $crud = RealEstateWebsite::findOrFail($id);

    $request->validate([
        'image' => 'nullable|image',
        'price' => 'required|numeric',
        'tittle' => 'required|string',
    ]);

    // Agar nayi image select ki hai
    if ($request->hasFile('image')) {
        $image = $request->file('image');
        $imagename = time() . '.' . $image->getClientOriginalExtension();

        $image->move(public_path('upload'), $imagename);

        $crud->image = $imagename;
    }

    $crud->price = $request->price;
    $crud->tittle = $request->tittle;

    $crud->save();

    return redirect()->back()->with('success', 'Property updated successfully!');
}

}                                   
