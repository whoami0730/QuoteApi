<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AdminController extends Controller
{
    //Login Admin 

    public function admin_quote_login(Request $request){
       
        $request->validate(
            [
                'email'=>'required|email',
                'password'=>'required',
            ]
            );
        $email=$request->email;
        $password=$request->password;
 
        $admin = DB::table('admins')->where([['email', $email], ['password', $password]])->first();

        if($admin){
            $request->session()->put('admin',$admin);
            return redirect('/dashboard');


        }else{
            return redirect()->back()->with('error','Email Password Not Found');
        }
    }
}
