<?php

namespace App\Http\Controllers;

use App\Models\Applicant;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class ApplicantController extends Controller
{
    public function create()
    {
        return view('home.home');
    }

    // store here
    public function save(Request $request){
        $validator = Validator::make($request->all(), [
            'image' => 'required|image|mimes:jpeg,png|max:1024', // 1024KB limit
        ]);
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
        ]);    
     $data = new Applicant;
     $data->name = $request->name;
     $data->email = $request->email;
     $data->batch = $request->batch;
     $data->phone = $request->phone;
     $data->image = $request->image;
     $data->save();
     return redirect()->back()->with('success', 'Data has been saved successfully');
        
    }

    public function show(){
        $data = Applicant::all();
        return view('home.show', compact('data'));
    }

     
    
     
}
