<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


//use Illuminate\Support\Facades\DB;

use App\Models\Employees;
//use Symfony\Component\Finder\Exception\DirectoryNotFoundException;

class EmployeeController extends Controller
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

    public function index()
    {
        return view('add_employee');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|unique:employees|max:255',
            'email' => 'required|unique:employees|max:255',
            'nid_no' => 'required|unique:employees|max:255',
            'address' => 'required',
        ]);

        $post = new Employees();
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
    }


}
