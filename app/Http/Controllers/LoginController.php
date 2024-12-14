<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Models\User;
use App\Mail\SendEmail;
use Mail;

class LoginController extends Controller
{
    public function login(Request $request)
    {
        $request->validate([
            'email' => 'required',
            'password' => 'required',
        ]);
        $input = $request->all();
        $credentials = $request->only('email', 'password');
        
        if (Auth::guard('admin')->attempt(array('email'=> $input['email'],'password'=> $input['password'],'role'=> 'admin'))) {
            
            return response()->json([
                'user' => Auth::guard('admin')->user()
            ]);
            
        }
        else if(Auth::guard('web')->attempt(array('email'=> $input['email'],'password'=> $input['password'],'role'=> 'user'))) {
            
            return response()->json([
                'user' => Auth::guard('web')->user()
            ]);
            
        }else{
            return response()->json([
                'error' => 'Email and password do not match'
            ], 401);

        }

    }
    public function register(Request $request)
    {

        $request->validate([
            'name' => 'required',
            'email' => 'required|unique:users,email',
            'password' => 'required',
        ]);

        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'phone' => $request->phone,
            'gender' => $request->gender,
            'role'   => 'user',
        ]);
        $input = $request->all();
        if(Auth::guard('web')->attempt(array('email'=> $input['email'],'password'=> $input['password'],'role'=> 'user'))) {

            $mailData = [
                'title' => 'Welcome mail from ELS',
            ];
               
            Mail::to($input['email'])->send(new SendEmail($mailData));
            return response()->json([
                'user' => Auth::guard('web')->user()
            ]);
            
        }else{
            return response()->json([
                'error' => 'Email and password do not match'
            ], 401);
        }
        

    }
    public function adminLogout(Request $request)
    {

        Auth::guard('admin')->logout();
        return response()->json(['message' => 'success']);
    }
    public function userLogout(Request $request)
    {

        Auth::guard('web')->logout();
        return response()->json(['message' => 'success']);
    }
    
}
