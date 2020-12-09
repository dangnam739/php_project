<?php

namespace App\Http\Controllers\Auth;

use DB;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\User;

class UserController extends Controller
{
    public function show($id)
    {
        $user = User::find($id);
        return view('user.user_profile')->with('user', $user);
    }

    public function edit($id)
    {
        $user = User::find($id);
        return view('user.edit_user')->with('user', $user);
    }

    public function update(Request $request, $id)
    {
        $user = User::find(auth()->user()->user_id);

        if ($request->isMethod("POST")) {
            if($request->hasFile('avatar_url')){
                $filenameWithExt = $request->file('avatar_url')->getClientOriginalName();
                $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
                $extension = $request->file('avatar_url')->getClientOriginalExtension();
                $filenameToStore = $filename .'_'.time().'.'.$extension;
                $path = $request->file('avatar_url')->storeAs('public/avatar_url', $filenameToStore);
            } else {
                $user->avatar_url="noimage.jpeg";
            }
            $user->avatar_url = $filenameToStore;
            $user->user_name = $request->input('username');
            $user->last_name = $request->input('lastname');
            $user->first_name = $request->input('firstname');
            $user->birthday = $request->input('birthday');
            if ($request->input('form_field_radio') == "Male") {
                $user->gender = "Male";
            } else {
                $user->gender = "Female";
            }
            $user->email = $request->input('email');
            $user->address = $request->input('address');
            $user->phone = $request->input('phone');
            $user->save();
        }
        return redirect("/users/$user->user_id")->with('user', $user);
    }
}