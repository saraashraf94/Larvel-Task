<?php

namespace App\Http\Controllers;

use App\Employee;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class EmployeeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
    
    }

    public function Add(Request $request )
    {
        $user = new User;
        $employees = new Employee;
        $imagePath = "";
        if($request->hasfile('photo')){
            $imagePath = $request->file('photo')->store('public');
        }
            $user->name = $request->user;
            $user->email = $request->email;
            $user->password = Hash::make($request->password);

        $user->save();


        $lastuser =  User::latest()->first();
        $employees->firstName = $request->firstname;
            $employees->lastName = $request->lastname;
            $employees->jobTitle = $request->job;
            $employees->image = $imagePath;
            $employees->status = $request->status;
            $employees->lang = $request->location;
            $employees->lout = $request->location;

            $employees->user_id = $lastuser->id;

        $employees->save();

            return redirect('/home');


    }

    public function update($idemployee)
    {


        $emp = Employee::find($idemployee);

                $arr = Array('employ'=>$emp);



        return view('update',$arr);





    }





    public function edit(Request $request,$iduser,$idemployee)
    {

        $user =  User::find($iduser);
        $employees = Employee::find($idemployee);
        $imagePath = "";
        if($request->hasfile('photo')){
            $imagePath = $request->file('photo')->store('public');
        }

        $user->name = $request->user;
        $user->email = $request->email;
        $user->password = Hash::make($request->password);

        $user->save();


        $employees->firstName = $request->firstname;
        $employees->lastName = $request->lastname;
        $employees->jobTitle = $request->job;
        $employees->image = $imagePath;
        $employees->status = $request->status;
        $employees->lang = $request->location;
        $employees->lout = $request->location;



        $employees->save();

        return redirect('/home');



    }

   
}
