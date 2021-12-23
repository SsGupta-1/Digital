<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\notification;
use Validator;
use Toastr;

class MessageController extends Controller
{
    public function notification(){
        $notifications = Notification::all();
        $notificationCount = Notification::count();
        return view('notification',compact(['notifications','notificationCount']));
    }

    public function sendnotification(Request $req){

        $validator = Validator::make($req->all(),[
            'senderid' => 'required',
            'receiverid'  =>  'required',
            'url'  =>  'required',
            'message'  =>  'required',
           
        ]);
        if ($validator->fails()) {
            $messages = $validator->messages();
            foreach ($messages->all() as $message) {
                Toastr::error($message, 'Failed', ['timeOut' => 5000]);
            }
            return redirect()->back()
            ->withErrors($validator)
            ->withInput();
        }else{
            $user = new notification;
            $user->sender_id=$req->input('senderid');
            $user->receiver_id=$req->input('receiverid');
            $user->url=$req->input('url');
            $user->message=$req->input('message');
          
            $user->save();
            Toastr::success('Notification sent Successfully ','Success');
            return back(); //->with('status', 'Data inserted!');
    
        }

        
    }
}
