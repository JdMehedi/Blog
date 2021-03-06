<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Setting;
use Session;

class SettingsController extends Controller
{
    public function index()
    {
       
        return view ('admin.settings.index')->with('settings', Setting::first());
    }


    public function update(Request $request)
    {
     
        $this->validate($request, [

            'site_name' => 'required',
            'contact_number' => 'required',
           
            'contact_email'=>'required|email',
            'address'=>'required',
            'about'=>'required'

        ]);
       
    
        
        $settings = Setting::first();

        $settings->site_name = request()->site_name;
        $settings->contact_number = request()->contact_number;
        $settings->contact_email = request()->contact_email;
        $settings->address= request()->address;
        $settings->about= request()->about;


       


        $settings->save();

        Session::flash('success','Updated successfully');

        return redirect()->back();

    }
}
