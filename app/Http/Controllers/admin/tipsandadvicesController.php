<?php

namespace App\Http\Controllers\admin;
use App\Http\Controllers\Controller;
use App\Models\tipsandadvices;
use Illuminate\Http\Request;

class tipsandadvicesController extends Controller
{
     public function tipsandadvices(){
        $crud = TipsAndAdvices::all();
        return view('admin.tipsandadvices' , compact('crud'));
    }
     public function tipsandadvicespost(Request $request)
{
    $request->validate([
        'image' => 'required|image',
        'Title' => 'required|string',
        'SubTitle' => 'required|string',
    ]);

    $crud = new TipsAndAdvices();

    $image = $request->file('image');
    $imagename = time() . '.' . $image->getClientOriginalExtension();

    $image->move(public_path('upload'), $imagename);

    $crud->image = $imagename;
    $crud->Title = $request->Title;
    $crud->Subtittle = $request->SubTitle;

    $crud->save();

    return redirect()->route('TipsAndAdvices')
        ->with('success', 'Popular location added successfully!');
}

//     function popularlocationpost(){
//     $crud = popularlocation::all();
//     return view('popularlocation', compact('crud'));
// }
        
    


    function delete($id) {
        $crud = TipsAndAdvices::find($id);
        $crud->delete();
        return redirect()->back();
    }
    

    public function update(Request $request, $id)
    {
        $crud = TipsAndAdvices::find($id);

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
