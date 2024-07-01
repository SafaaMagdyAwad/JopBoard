<?php

namespace App\Http\Controllers;

use App\Models\Jop;
use App\Models\JopRequest;
use App\Models\Notification;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    //
    private $jops;
    private $message;
    public function __construct(){
        $this->jops=Jop::all();
        $this->message=" ";
    }
    public function request($user_id,$jop_id,$employee_id ,$status){
        $request=JopRequest::where('user_id',$user_id)
        ->where('jop_id',$jop_id)
        ->where('employee_id',$employee_id)
        ->where('status',$status)
        ->first();
        return $request;
    }

    public function joinJopRequests($jop_id ,$status){
        $users=User::join('jop_requests','users.id','jop_requests.employee_id')
        ->join('jops','jops.id','jop_requests.jop_id')
        ->select('users.id as employee_id','users.name as employee_name','users.email as employee_email','jop_requests.created_at','jop_requests.status','jops.*','jops.id as jop_id')
        ->where('jop_requests.jop_id',$jop_id)
        ->where('jop_requests.status',$status)
        ->latest('jop_requests.updated_at')
        ->get();
        return $users;
    }
    public function joinJopRequestsTrackRequest($employee_id ){
        $users=User::join('jop_requests','users.id','jop_requests.employee_id')
        ->join('jops','jops.id','jop_requests.jop_id')
        ->select('users.id as employee_id','users.name as employee_name','users.email as employee_email','jop_requests.created_at','jop_requests.status as status','jops.*','jops.id as jop_id')
        ->where('jop_requests.employee_id',$employee_id)
        ->latest('jop_requests.updated_at')
        ->get();
        return $users;
    }

    public function joinNotifications($id){
        $notifications=User::join('notifications','users.id','notifications.sender_id')
        ->join('jops','jops.id','notifications.jop_id')
        ->select('users.id as sender_id','users.name as sender_name','users.email as sender_email','jops.title as jop_title','jops.salary as jop_salary','jops.company','notifications.*')
        ->where('notifications.receiver_id',$id)
        ->latest('notifications.updated_at')
        ->get();
        return $notifications;
    }
    public function allJopRequests($id){
        $users=$this->joinJopRequests($id,"notSeen");
        $this->message="not seen";
        return view('seeker.jopApplyers',['users'=>$users,'message'=>$this->message]);
    }//jop id
    public function contact($id, $jop_id){
        //store
        $sender=Auth::user();
        $sender_id=$sender['id'];
        $receiver=User::find($id);
        $receiver_id=$id;
        $title="welcome ". $receiver['name'];
        $content="We have found that you are a qualified person and we want to communicate with you. We will contact you via your email ". $receiver['name'] . " and set a date for the interview.";
        // dd($receiver_id);
        Notification::create([
            'sender_id'=>$sender_id,
            'receiver_id'=>$receiver_id,
            'jop_id'=>$jop_id,
            'title'=>$title,
            'content'=>$content,
        ]);
        $this->message="notification sent sussessfull to " .  $receiver['name'] ;
        //make the request  waiting requests 
        $request=$this->request($sender_id ,$jop_id ,$receiver_id,"notSeen");
        $request->update([
            'status'=>'waiting',
        ]);
        // dd($request);
       
        //return
        return $this->allJopRequests($jop_id);
    }//receiverid , jop id
    
    public function notifications(){
        $user=Auth::user();
        $id=$user['id'];
        $notifications=$this->joinNotifications($id);
        // dd($notifications);
        return view('employee.notifications',['notifications'=>$notifications]);
    }
    
    public function statusList($id,$status){
        $user=Auth::user();
        $user_id=$user['id'];
        $jop_id=$id;

        
        $waitingList=JopRequest::where('user_id',$user_id)
        ->where('jop_id',$jop_id)
        ->where('status',$status)
        ->latest('updated_at')
        ->get();
        // dd($waitingList);
        $this->message="waiting list";
        $users=$this->joinJopRequests($id,$status);
        return $users;
    }
    public function waitingList($id){
        $users=$this->statusList($id,'waiting');
        return view('seeker.jopApplyers',['users'=>$users,'message'=>$this->message]);
    }
    public function acceptedList($id){
        $users=$this->statusList($id,'accepted');
        return view('seeker.jopApplyers',['users'=>$users,'message'=>$this->message]);
    }
    public function accepted($id, $jop_id){
         //store
         $sender=Auth::user();
         $sender_id=$sender['id'];
         $receiver=User::find($id);
         $receiver_id=$id;
         $title="welcome ". $receiver['name'];
         $content="CONGRATEULATIONS YOU WERE ACCEPTED . WE WISH YOU HAPPLY JOIN OUT TEAM . contact us for more details 01067605447";
         // dd($receiver_id);
         Notification::create([
             'sender_id'=>$sender_id,
             'receiver_id'=>$receiver_id,
             'jop_id'=>$jop_id,
             'title'=>$title,
             'content'=>$content,
         ]);
         $this->message="notification sent sussessfull to " .  $receiver['name'] ;

         $request=$this->request($sender_id ,$jop_id ,$receiver_id,"waiting");
         $request->update([
             'status'=>'accepted',
         ]);
        //return
        // dd($request);
        $users=$this->joinJopRequests($id,"waiting");

        return view('seeker.jopApplyers',['users'=>$users,'message'=>$this->message]);
    }//receiverid , jop id
    public function rejected($id, $jop_id){
         //store
         $sender=Auth::user();
         $sender_id=$sender['id'];
         $receiver=User::find($id);
         $receiver_id=$id;
         $title="welcome ". $receiver['name'];
         $content="we are SORRY to tel you that the posation was taken by someone else";
         // dd($receiver_id);
         Notification::create([
             'sender_id'=>$sender_id,
             'receiver_id'=>$receiver_id,
             'jop_id'=>$jop_id,
             'title'=>$title,
             'content'=>$content,
         ]);
         $this->message="notification sent sussessfull to " .  $receiver['name'] ;
         $request=$this->request($sender_id ,$jop_id ,$receiver_id,"waiting");
         $request->update([
             'status'=>'rejected',
         ]);
        //return
        $users=$this->joinJopRequests($id,"notSeen");

        return view('seeker.jopApplyers',['users'=>$users,'message'=>$this->message]);
    }//receiverid , jop id

    public function reqTrack(){
        $user=Auth::user();
        $employee_id=$user['id'];
       
        $jop_Status=$this->joinJopRequestsTrackRequest($employee_id);
        // dd($jop_Status);
        return view('employee.jops',['jop_Status'=>$jop_Status]);

    }
    public function deleteJopREquest($jop_id){
        $user=Auth::user();
        $employee_id=$user['id'];
        $request=JopRequest::where('jop_id',$jop_id)
        ->where('employee_id',$employee_id)
        ->first();
        if(!empty($request)){
            $request->delete();
        }
        $jop_Status=$this->joinJopRequestsTrackRequest($employee_id);
        // dd($jop_Status);
        return view('employee.jops',['jop_Status'=>$jop_Status]);   
    }
}


