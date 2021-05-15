<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Employee;
class EmpController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //echo 'hello';
        
        return Employee::All();
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
        $obj = new Employee();
        $name =$request->input('name');
        $email =$request->input('email');
        $number =$request->input('number');
        $gender =$request->input('gender');
        $hobby =$request->input('hobby');       
     
        $obj->name =$name;
        $obj->email =$email;
        $obj->number =$number;
        $obj->gender =$gender;
        $obj->hobby =$hobby;        
        $obj->save(); 
        
        echo 'recorrd inserted';
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //echo 'show';
        return Employee::find($id);
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
        $obj = Employee::find($id);
        $name =$request->input('name');
        $email =$request->input('email');
        $number =$request->input('number');
        $gender =$request->input('gender');
        $hobby =$request->input('hobby');       
     
        $obj->name =$name;
        $obj->email =$email;
        $obj->number =$number;
        $obj->gender =$gender;
        $obj->hobby =$hobby;        
        $obj->save();         
        echo 'recorrd updated';
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $obj = Employee::find($id);
        $obj->delete(); 
        
        echo 'record delete';
    }
}
