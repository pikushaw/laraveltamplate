<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;

use App\Models\contactController;
use Illuminate\Http\Request;

class ContactControllerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
     $contact=DB::table('contact_controllers')->get();
    
     return view('result',compact('contact'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('contact');

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
         //Validation
         $validated = $request->validate([
            'username' => 'required',
            'emailadd' => 'required',
            'phno' => 'required',
            'message' => 'required',
        ]);
        //data request
        $username=$request->username;
        $emailadd=$request->emailadd;
        $phno=$request->phno;
        $message=$request->message;
       
        //store data
        $result= DB::table('contact_controllers')->insert([
            
            'username' => ucwords($username),
            'emailadd' => $emailadd,
            'phno' => $phno,
            'message'=>ucwords($message),
        ]);
        if ($result){
            return redirect()->back()->with('success', 'innsrtened');
        }else{
            return redirect()->back()->with('success', 'Not insertedinserted'); 
        }
    
        
    }       
     /**
     * Display the specified resource.
     *
     * @param  \App\Models\contactController  $contactController
     * @return \Illuminate\Http\Response
     */
    public function show(contactController $contactController)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\contactController  $contactController
     * @return \Illuminate\Http\Response
     */
    public function edit(contactController $contactController)
    {
        return view('contact',compact('contactController'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\contactController  $contactController
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, contactController $contactController)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\contactController  $contactController
     * @return \Illuminate\Http\Response
     */
    public function destroy(contactController $contactController)
    {
        //
    }
}
