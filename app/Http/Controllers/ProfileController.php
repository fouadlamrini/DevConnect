<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ProfileController extends Controller
{
   public function show(){
    
    return view('profile');
   }

  
   /* Show the form for editing the specified resource.
   */
  public function edit()
  {
    $user = Auth::User();
   return view('editProfile',["user"=>$user]);
  }

  /**
   * Update the specified resource in storage.
   */
  public function update(Request $request,$id)
  {
    // dd($request);
    $request->validate([
    'bio' => 'required|string',
    'competence' => 'required', 
    'githubName' => 'required|string',
    'profession' => 'required|string',
    'image' => 'required|string',
    'location' => 'required|string',
    'age' => 'required', 
    'languages' => 'required',
    ]);


    $user=User::findOrFail($id);
    $user->bio=$request->input('bio');
    $user->competence=$request->input('competence');
    $user->github_name=$request->input('githubName');
    $user->profession=$request->input('profession');
    $user->image=$request->input('image');
    $user->location=$request->input('location');
    $user->age=$request->input('age');
    $user->languages=$request->input('languages');
    $user->save();

  }


}
