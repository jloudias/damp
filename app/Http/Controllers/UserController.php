<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Session;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.user.index')->with('users',User::all());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.user.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'username'=>'required|min:4|max:20',
            'name'=>'required|max:150',
            'email'=>'required|email',
            'password'=> 'required|min:6'
        ]);
        
        // User::create($request->all());
        $user = User::create([
            'username'=>request('username'),
            'name'=>request('name'),
            'email'=>request('email'),
            'password'=>bcrypt(request('password')),
        ]); 

        return redirect()->route('user.index')->with('success','User created successfully!');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(User $user)
    {
        return view('admin.user.edit', compact('user'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'username'=>'required|min:4|max:20',
            'name'=>'required|max:150',
            'email'=>'required|email',
        ]);
        
        $user=User::find($id);
        $user->update($request->all()); 

        return redirect()->route('user.index')->with('success','User updated successfully!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $user)
    {
        $user->delete();

        return redirect()->route('user.index')->with('success','User deleted successfully!');
    }
}
