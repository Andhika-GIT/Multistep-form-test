<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;

class RegisterController extends Controller
{
    

    public function store(Request $request) {
        $request->validate([
            'cv' => 'required|image|file|max:50000|mimes:jpg,jpeg,png'
        ]);

        $file_name = $request->cv->getClientOriginalName();
        // $file_name = $request->cv;
        $upload_cv = $request->cv->storeAs('img', $file_name);

        if($upload_cv) {
            $values = [
                "first_name"=>$request->firstName,
                "last_name"=>$request->lastName,
                "gender"=>$request->gender,
                "age"=>$request->age,
                "email"=>$request->email,
                "phone"=>$request->phone,
                "country"=>$request->country,
                "city"=>$request->city,
                "frameworks"=>json_encode($request->frameworks),
                "description"=>$request->description,
                "cv"=>$file_name,
            ];
            
            Student::create($values);

            return response()->json(['success' => 'File uploaded successfully.']);

        }
    }
}
