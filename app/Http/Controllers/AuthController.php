<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use DB;

class AuthController extends Controller
{
    protected function login(Request $request)
    {
        $email =  $request['email'];
        $password =  $request['password'];

        if(Auth::attempt(['email'=>$email,'password'=>$password]))
        {
            return view ('loginform.thanhcong',['user'=>Auth::user()]);
        }
        else
        { 
            return view ('loginform.dangnhap',['error'=>'wrong username or password']);
        }
    }
    public function logout()
    {
        Auth::logout();
        return view ('loginform.dangnhap');
    }
    public function dangky()
    {
        return view ('loginform.dangky');
    }
    //show database
    public function showdata()
    {
        $data['data'] = DB::table('users')->get();
        if (count($data) >0)
        {
            return view ('data', $data);
        }
        else
        {
            return view ('data');
        }
    }
    //delete data
    public function destroy($id)
    {
        $user = User::find($id);
        $user->delete();

        return redirect()->route('data');
    }
    
}