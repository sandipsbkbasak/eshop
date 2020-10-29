<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class Admin_auth extends Controller
{
    function login_submit(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required|min:1'
        ]);

        $email = $request->input('email');
        $password = $request->input('password');

        $result = DB::table('users')
                    ->where('email', $email)
                    ->where('password', $password)
                    ->get();
        //echo "<pre>";
        //print_r($result);  

        if(isset($result[0]->id))
        {
            if($result[0]->status == 1)
            {
                $request->session()->put('BLOG_USER_ID', $result[0]->id);
                return redirect('/admin/post/list');
            }
            else
            {
                $request->session()->flash('msg', 'Your Account Deactivated!');
                return redirect('/admin');
            }
        }
        else
        {
            $request->session()->flash('msg', 'Please enter your valid Login details');
            return redirect('/admin');
        }          
    }
}