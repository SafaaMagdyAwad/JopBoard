<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{

    public function start(){
        // dd(Auth::user());
        $user=Auth::user();
        if(!empty(Auth::user())){
            //logedin
            if($user['rule']==='seeker'){
                return view('seeker.seekerHome',['user'=>$user]);
            }elseif($user['rule']==='employee'){
                return view('employee.employeeHome',['user'=>$user]);
            }elseif($user['rule']==='admin'){
                return view('admin.adminHome',['user'=>$user]);
            }else{
                return view('404');
            }
        }else{
            $jopController=new JopController();
            return view('welcome',['jops'=>$jopController->jops]);
        }

    }
    public function registerForm(){
        return view('register');
    }
    public function register(Request $request){
        //validation
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'rule' => 'required',
            'password' => 'required|string|min:3|confirmed',
        ]);

        //store
        User::create([
            'name' => $validatedData['name'],
            'email' => $validatedData['email'],
            'rule' => $validatedData['rule'],
            'password' => Hash::make($validatedData['password']),
        ]);
        //return
        return view('login');
    }

    public function loginForm(){
        return view('login');
    }
    public function login(Request $request){
        //chik if user was logedin
        $logedinuser=Auth::user();
        if(!empty($logedinuser)){
            // dd("user is loged in");
            if($logedinuser['rule'] === "employee"){
                return view('employee.employeeHome',['user'=>$logedinuser]);
                // dd("employee");
            }elseif($logedinuser['rule'] === "seeker"){
                return view('seeker.seekerHome',['user'=>$logedinuser]);
                // dd('seeker');
            }else{
                $jopController=new JopController();
                return view('welcome',['jops'=>$jopController->jops]);            }
        }else{
            // dd('no user');
            
            //validation
            $validatedData = $request->validate([
            'email' => 'required|string|email|max:255',
            'password' => 'required|string|min:3',
        ]);

        //find user
        $user=User::where('email',$validatedData['email'])->first();
        
        if(!empty($user)){
            $password_checked = Hash::check($request->password, $user->password);
            if($password_checked){
                Auth::login($user);
                if($user['rule'] === "employee"){
                    return view('employee.employeeHome',['user'=>$user]);
                    // dd("employee");
                }elseif($user['rule'] === "seeker"){
                    return view('seeker.seekerHome',['user'=>$user]);
                    // dd('seeker');
                }else{
                       $jopController=new JopController();
                        return view('welcome',['jops'=>$jopController->jops]);
                }
                // dd($user);
            }else{
                $error='wrong password';
            }
        }else{
            $error='user dont exist';
        }
        
    }

    }

    public function logout(){
        Auth::logout();
        return view('login');
    }

}
