<?php

namespace App\Http\Controllers;

use App\Models\Trainer;
use GrahamCampbell\ResultType\Success;
use Illuminate\Http\Request;

class TrainerController extends Controller
{
   public function show()
   {
    return view('backend.add_trainer');
   }
    public function store(Request $req)
    {
            $req->validate([
                'name' => 'required|string|max:255',
                'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048', 
        ]);
        $trainer = new Trainer();
        $trainer->name=$req->name;
        $image = $req->file('image');
        $orignalExtension = $image->getClientOriginalExtension();
        $fileName = 'image_'. time() . '.' . $orignalExtension;
        
        $image->storeAs('images' , $fileName , 'public');

        $trainer->image = $fileName;
        $trainer->save();

        return redirect('/admin/trainer')->with('success' ,'Data has been successfully submitted ');
    }

    public function select()
{
    $trainers = Trainer::all(); // Fetch all trainers
    return view('backend.trainershow', compact('trainers'));
}

public function edit($id)
{
    $trainer = Trainer::findOrFail($id);
    return view('backend.edittrainer', compact('trainer'));
}

public function update(Request $req, $id)
{
    $req->validate([
        'name' => 'required|string|max:255',
        'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
    ]);

    $trainer = Trainer::findOrFail($id);
    $trainer->name = $req->name;

    if ($req->hasFile('image')) {
        $imagePath = $req->file('image')->store('trainer', 'public');
        $trainer->image = basename($imagePath);
    }

    $trainer->save();

    return redirect()->route('trainer.select')->with('success', 'Trainer updated successfully.');
}


public function destroy($id)
{
    $trainer = Trainer::findOrFail($id);

    // Delete the image file if it exists
    if ($trainer->image && file_exists(storage_path('app/public/trainers/' . $trainer->image))) {
        unlink(storage_path('app/public/trainers/' . $trainer->image));
    }

    $trainer->delete();

    return redirect()->route('trainer.select')->with('success', 'Trainer deleted successfully.');
}



}
