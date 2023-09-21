<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $user_id = auth()->user()->id;
        $user = User::find($user_id);
        return view('home')->with('posts', $user->posts);
    }

    public function showProfile(){

        $user_id = auth()->user()->id;
        $user = User::find($user_id);
        return view('users.user')->with('user', $user);
    }

    public function editProfile() {

        $user_id = auth()->user()->id;
        $user = User::find($user_id); 
        return view('users.edit')->with('user', $user);

    }

    public function updateProfile(Request $request, User $user) {

        $this->validate($request, [
            'name' => 'required',
            'email' => 'required',
        ]);
    
        // Edit User
        // $user = User::find($id);
        $user->name = $request->input('name');
        $user->email = $request->input('email');
        $user->update();
        
        return view('users.user')
            ->with('user', $user)
            ->with('success', 'User Updated');
    }
}
