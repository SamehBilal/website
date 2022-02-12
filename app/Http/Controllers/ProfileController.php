<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function index()
    {
        $user = User::find(auth()->user()->id);
        return view('setup.settings.profile',compact('user'));
    }

    public function update(Request $request, $id)
    {
        $user = User::findOrFail($id);

        $this->validate($request, User::rules($update = true, $user->id));

        $user->update([
            'name'                  => $request->name,
            'email'                 => $request->email,
            'password'              => $request->password == '' ? $user->password:$request->password,
        ]);

        if(request()->hasFile('avatar'))
        {
            $image = time() . '_' . request()->file('avatar')->getClientOriginalName();
            request()->file('avatar')->storeAs('/public', "/user/{$user->id}/{$image}", '');
            $user->update(['avatar' =>  $image]);
        }

        return redirect()->back()->with('success','Data updated successfully');
    }
}
