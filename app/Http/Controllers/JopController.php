<?php

namespace App\Http\Controllers;

use App\Models\Jop;
use App\Models\JopRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class JopController extends Controller
{
    //
    private $jops;
    public function __construct(){
        $this->jops=Jop::all();
    }
    public function request($jop_id,$employee_id ){
        $request=JopRequest::where('jop_id',$jop_id)
        ->where('employee_id',$employee_id)
        ->first();
        
        return $request;
    }
    public function createJopForm(){
        $user=Auth::user();
        return view('seeker.createJop',['user'=>$user]);
    }
    public function createJop(Request $request){
        $user=Auth::user();
        //validation
        $validatedData = $request->validate([
            'title' => 'required|string|max:100',
            'salary' => 'required',
            'requirements' => 'required',
            'discription' => 'required',
            'user_id' => 'required',
            'location' => 'required',
            'type' => 'required',
            'company' => 'required',
        ]);
        //store
        Jop::create([
            'title' => $request->title,
            'salary' => $request->salary,
            'requirements' => $request->requirements,
            'discription' => $request->discription,
            'user_id' => $request->user_id,
            'location' => $request->location,
            'type' => $request->type,
            'company' => $request->company,
            
        ]);
        //route
        return view('seeker.seekerHome',['user'=>$user]);
    }
    public function allJops(){
        $user=Auth::user();
        if($user['rule']==="seeker"){

            return view('seeker.jops',['jops'=>$this->jops]);
        }elseif($user['rule']==="employee"){
            return view('employee.jops',['jops'=>$this->jops]);
        }
        // dd($jops);
    }
    public function jop($id){
        $jop=Jop::findOrFail($id);
        $user=Auth::user();
        $user_id=$user['id'];
        if($user['rule']==="seeker"){
            return view('seeker.jop',['jop'=>$jop,'user_id'=>$user_id]);
        }elseif($user['rule']==="employee"){
            $request=$this->request($id,$user_id);
            // dd($request);
            if(!empty($request)){
                $button="disabled";
            }else{
                $button="";
            }
            return view('employee.jop',['jop'=>$jop,'button'=>$button]);
        }

        // dd($jop);
    }
    public function updateJopForm($id){
        $jop=Jop::find($id);
        $user=Auth::user();

        if($user['rule']==="seeker"){
            return view('seeker.updateJop',['jop'=>$jop]);
        }else{
            return view('404');
        }
    }
    public function updateJop($id,Request $request){
        $user=Auth::user();
        $jop=Jop::findOrFail($id);
        if(!empty($jop)){
            $validatedData = $request->validate([
                 'title' => 'string|max:100',
            ]);
            $jop->update([
                'title' => $request->title,
                'salary' => $request->salary,
                'requirements' => $request->requirements,
                'discription' => $request->discription,
                'user_id' => $request->user_id,
                'location' => $request->location,
                'type' => $request->type,
                'company' => $request->company,
                
            ]);
        }
        
        return view('seeker.jops',['jops'=>$this->jops]);
    }
    public function deleteJop($id){
        $jop=Jop::findOrFail($id);
        
        $user=Auth::user();
        if($user['rule']==="seeker"){
            if(!empty($jop)){
                $jop->delete();
            }
             return $this->allSeekerJops();
         }else{
             return view('404');
         }
    }
    public function jopApply($id){
        $jop=Jop::findOrFail($id);
        $jop_id=$id;
        $employee=Auth::user();
        $employee_id=$employee['id'];
        $user_id=$jop['user_id'];
        JopRequest::create([
            'jop_id'=>$jop_id,
            'employee_id'=>$employee_id,
            'user_id'=>$user_id,
            'status'=>'notSeen',
        ]);
        return view('employee.jops',['jops'=>$this->jops]);
    }
    public function allSeekerJops(){
        $user=Auth::user();
        $id=$user['id'];
        $jops=Jop::where('user_id',$id)->get();
        // dd($jops);
        return view('seeker.jops',['sjops'=>$jops]);
    }

   
}
