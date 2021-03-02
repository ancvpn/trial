<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function store(Request $request)
    {
         $request->validate([
            'name' => 'required|max:255',
            'email' => 'required|unique:posts|max:255',
            'NID' => 'required|unique:posts|max:255',
            'address' => 'required',
            'phone' => 'required|max:13',
            'photo' => 'required',
            'salary' => 'required',
        ]);

        $post = new Post();
        $post->name = $request->name;
        $post->email = $request->email;
        $post->phone = $request->phone;
        $post->address = $request->address;
        $post->experience = $request->experience;
        $post->nid_no = $request->nid_no;
        $post->salary = $request->salary;
        $post->vacation = $request->vacation;
        $post->city = $request->city;
        $post->save();
        return Redirect()->back();




    }
}
