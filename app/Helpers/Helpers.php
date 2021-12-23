<?php
    //for notification count
    function notificationCount()
    {
    	$notificationCount = App\notification::all()->where('status',0)->count();
        return $notificationCount;
    }
    //for notification details
     function notification(){
        $notificationsMsg = App\notification::where('status',0)->get();;
        return $notificationsMsg;
    }

    //for users count
    function usercount(){
        $usercount = App\quytech::count();
        return $usercount;
    }

    //for students count
    function studentcount(){
        $studentcount = App\studentdetails::count();
        return $studentcount;
    }