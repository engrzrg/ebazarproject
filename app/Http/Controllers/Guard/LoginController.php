<?php

namespace App\Http\Controllers\Guard;

use App\Http\Controllers\Controller;
use App\Http\Requests\LoginRequest;
use App\Http\Requests\RegisterNewCustomerRequest;
use Illuminate\Http\Request;
use Sentinel;

class LoginController extends Controller
{
    public function index()
    {
        return view('guard.index');
    }
    public function register(RegisterNewCustomerRequest $request)
    {
        $request->register($request->all());
        flash('Your Are register Successfully.')->success();
        return back();
    }
    public function login(LoginRequest $request)
    {
             // return dd($request);
        $credentials = [
            'email' => $request->email,
            'password' => $request->password
        ];
        $request->verify($credentials);
         if(Sentinel::check()){
               return redirect()->route('listing.create');
          }
        else{
            flash('Incorrect username or password.')->error();
            return back();        
            }
    }
    public function logout()
    {
        Sentinel::logout();
         return redirect('guard');
    }
}
