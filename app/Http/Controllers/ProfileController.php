<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProfileController extends Controller
{
   public function show(){
    
    return view('profile');
   }

  
   /* Show the form for editing the specified resource.
   */
  public function edit()
  {
   return view('editProfile');
  }

  /**
   * Update the specified resource in storage.
   */
  public function update(Request $request)
  {
      dd('je suis la');
  }


}
