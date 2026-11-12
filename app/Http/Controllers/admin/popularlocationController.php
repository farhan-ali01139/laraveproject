<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\popularlocation;

class popularlocationController extends Controller
{
      public function popularlocation(){
        $crud = popularlocation::all();
        return view('admin.popularlocation' , compact('crud'));
    }
    
    public function indexpost(Request $request)
{
    $request->validate([
        'image' => 'required|image',
        'Title' => 'required|string',
        'SubTitle' => 'required|string',
    ]);

    $crud = new popularlocation();

    $image = $request->file('image');
    $imagename = time() . '.' . $image->getClientOriginalExtension();

    $image->move(public_path('upload'), $imagename);

    $crud->image = $imagename;
    $crud->Title = $request->Title;
    $crud->Subtittle = $request->SubTitle;

    $crud->save();

    return redirect()->route('popularlocation')
        ->with('success', 'Popular location added successfully!');
}

//     function popularlocationpost(){
//     $crud = popularlocation::all();
//     return view('popularlocation', compact('crud'));
// }
        
    


    function delete($id) {
        $crud = popularlocation::find($id);
        $crud->delete();
        return redirect()->back();
    }
    

    public function update(Request $request, $id)
    {
        $crud = popularlocation::find($id);

        if (!$crud) {
            return redirect()->back()
                ->with('error', 'Record not found');
        }

        $request->validate([
            'image' => 'nullable|image',
            'Title' => 'required|string',
            'SubTitle' => 'required|string',
        ]);

        // New image select ki ho to hi update karo
        if ($request->hasFile('image')) {
            $image = $request->file('image');

            $imagename = time() . '.' .
                $image->getClientOriginalExtension();

            $image->move(public_path('upload'), $imagename);

            $crud->image = $imagename;
        }

        $crud->Title = $request->Title;
        $crud->Subtittle = $request->SubTitle;

        $crud->save();

        return redirect()->back()
            ->with('success', 'Record updated successfully');
    }
}
