<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class RegisterController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'name' => 'required',
            'email' => 'required',
            'students' => 'required',
            'marketing' => 'required',
        ]);

        $user = User::all()->where('email', $request->input('email'))->flatten();
        $user = $user[0];

        if(is_null($user)) {
            //Create New Registered User
            $new = new User;
            $new->name = $request->input('name');
            $new->email = $request->input('email');
            $new->no_of_students = $request->input('students');
            $new->marketing = $request->input('marketing');
            $new->save();

            return redirect('/')->with('success', 'Congratulations! You have successfully registered your interest!');
        } else {
            
            $new = User::find($user->id);
            $new->name = $request->input('name');
            $new->email = $request->input('email');
            $new->no_of_students = $request->input('students');
            $new->marketing = $request->input('marketing');
            $new->save();
        
            return redirect('/')->with('success', 'Congratulations! You have successfully registered your interest!');
        }
        
        ;
        
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
    public function edit($id)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
