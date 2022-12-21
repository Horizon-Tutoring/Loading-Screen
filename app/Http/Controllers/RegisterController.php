<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use App\Models\User;
use Mail;
use App\Mail\RegisterMail;

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

        if($user->isEmpty()) {
            //Create New Registered User
            $new = new User;
            $new->name = $request->input('name');
            $new->email = $request->input('email');
            $new->no_of_students = $request->input('students');
            if($request->input('marketing') == 'on'){
                $new->marketing = $request->input('marketing');
            }
            $new->save();

            //Email Information about registration!
            $data = [
                'view'=>'email.register-email',
                'subject'=>'Horizon Tutoring | Welcome Aboard',
                'name'=>$request->input('name'),
                'email'=>$request->input('email'),
                'marketing'=>$request->input('marketing'),
                'students'=>$request->input('students')
            ];
            Mail::to($request->input('email'))->send(new RegisterMail($data));

            //Email Executives about Registration!
            $email = 'executives@horizontutoring.com.au';
            $data2 = [
                'view'=>'email.admin-email',
                'subject'=>'Horizon Tutoring | New Customer Registered',
                'name'=>$request->input('name'),
                'email'=>'executives@horizontutoring.com.au',
                'marketing'=>$request->input('marketing'),
                'students'=>$request->input('students')
            ];
            Mail::to($email)->send(new RegisterMail($data2));

            return redirect('/')->with('success', 'Congratulations! You have successfully registered your interest!');
            
        } else {
            $user = $user[0];
            $new = User::find($user->id);
            $new->name = $request->input('name');
            $new->email = $request->input('email');
            $new->no_of_students = $request->input('students');
            $new->marketing = $request->input('marketing');
            $new->save();

            //Email Information about registration!
            $data = [
                'view'=>'email.register-update',
                'subject'=>'Horizon Tutoring | Account Update',
                'name'=>$request->input('name'),
                'email'=>$request->input('email'),
                'marketing'=>$request->input('marketing'),
                'students'=>$request->input('students')
            ];
            Mail::to($request->input('email'))->send(new RegisterMail($data));

            //Email Executives about Registration!
            $email = 'executives@horizontutoring.com.au';
            $data2 = [
                'view'=>'email.admin-email',
                'subject'=>'Horizon Tutoring | New Customer Registered',
                'name'=>$request->input('name'),
                'email'=>'executives@horizontutoring.com.au',
                'marketing'=>$request->input('marketing'),
                'students'=>$request->input('students')
            ];
            Mail::to($email)->send(new RegisterMail($data2));
            
            //Return page
            return redirect('/')->with('success', 'Congratulations! We have now updated your details!');
        }
        
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
