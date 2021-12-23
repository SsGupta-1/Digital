<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\Studentrequest;
use App\Http\Requests\loginrequest;
use App\student;
use App\User;
use App\studentdetails;
use App\quytech;
use Crypt;
use Session;
use Auth;
use Hash;
use Toastr;
use Validator;



class studentcontroller extends Controller
{
    //
    function index (){
        return view('/home');
   }

function display()
{
    $data = quytech::all();
    // $data = quytech::paginate(3);
    return view('/demo',["data"=>$data]);
}


function edit($id)
    {
        $data= quytech::find($id);
        return view('update',["data"=>$data]);

    }

function update(Request $req)
    {
        $user = quytech::find($req->did);
        $user->fname=$req->input('fname');
        $user->lname=$req->input('lname');
        $user->email=$req->input('email');
        $user->address=$req->input('address');
        $user->gender=$req->input('gender');

        if($req->hasfile('image'))
       {
        $file = $req->file('image');
        $extenstion = $file->getClientOriginalExtension();
        $filename = time().'.'.$extenstion;
        $file->move('uploads/students/', $filename);
        $user->image = $filename;
       }
        
        $user->save();
        Toastr::success('Records updated Successfully!','Success');
        
        return redirect('/demo');   //->with('status', 'Records updated!');  

        //$req->session()->flash('status','Data updated successfully');
        //return back()->with('status', 'Records updated!');
       // return redirect('/admin')->with('status', 'Records updated!');
        
    }


    function delete($id)
    {
        quytech::find($id)->delete();
       // Session::flash('status','Data deleted successfully');
       Toastr::success('Records Deleted!','Success');
        return redirect('demo');   //->with('status', 'Records Deleted!');
    }


//used for registration
function register(Studentrequest $req)
{

   
    //return $req->input();
    $user = new quytech;
    $user->fname=$req->input('fname');
    $user->lname=$req->input('lname');
    $user->email=$req->input('email');
    $user->address=$req->input('address');
    $user->gender=$req->input('gender');
    
    if($req->hasfile('image'))
    {
        $file = $req->file('image');
        $extenstion = $file->getClientOriginalExtension();
        $filename = time().'.'.$extenstion;
        $file->move('uploads/students/', $filename);
        $user->image = $filename;
    }

    $user->password=Crypt::encrypt($req->input('password'));
    $user->save();
    
    $req->Session()->put('user',$user);
     //dd($user);
    Toastr::success('Registered Successfully.','Success');
    return redirect('/admin');

      
}
 

    // used for login
    public function login(loginrequest $req)
    {

        $user = quytech::where("email",$req->input('email'))->first();
        // echo $user;
        if(!empty($user)){
            // dd($user);
                if(Crypt::decrypt($user->password) == $req->input('password'))
                {
                    $req->Session()->put('user',$user);
                    Toastr::success('Login Successfully ','Success');
                    return redirect('/admin');   //->with('status', 'login successfull');
                }
                else{
                    Toastr::error('Please enter valid credentials.','Failed');
                    return back();  //->with('status','Wrong Email or Password!');
                }
        }else{
        
            Toastr::error('Please enter valid credentials.','Failed');
            return back(); 
        }
          
        
    }






    // function search()
    // {
    //     $search_text = $_GET['search'];
    //     $records = quytech::where('fname', 'LIKE','%'. $search_text.'%')->get();

    //     return view('/search',compact('records'));
    // }







    function update_password(Request $req)
    {


        $req->validate([
            
            'current_password' => 'required',
            'password'  =>  'required|min:4|confirmed',
           
        ]);


        // if(quytech::where("password",Hash::make($req->input('current_password'))));

        // {
        //     echo "match password";
        // }
        

        $password=Auth::user()->password;
        if(Hash::check($req->current_password,$password)){
            $user = quytech::find(Auth::id());
            $user->password = Hash::make($req->password);
            $user->save();
            Auth::logout();
            return redirect('/login')->with('status', 'Password update successfully!');
        }else{
            return back()->with('status', 'Wrong current Password!');
        }



        //     $password= Crypt::encrypt($req->input('current_password'));
        //     //Crypt::encrypt($req->input('current_password'));
        //    // echo $password;
        //     if(quytech::where("password",'$password'))
        //     {
        //         $user = new quytech;
        //         $user->password=$password;
        //         $user->save();
        //         return redirect('/login')->with('status', 'Password update successfully!');
        //     }else{
        //         return back()->with('status', 'Wrong current Password!');
        //     }
     


    }


 public function profile()
 {
     return view('profile')->with('user',Auth::user());
 }


    public function adddetails(Request $req)
    {

        $validator = Validator::make($req->all(),[
            'name' => 'required',
            'physics'  =>  'required',
            'chemistry'  =>  'required',
            'biology'  =>  'required',
            'math'  =>  'required',
            'psychology'  =>  'required',
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
            $user = new studentdetails;
            $user->name=$req->input('name');
            $user->physics=$req->input('physics');
            $user->chemistry=$req->input('chemistry');
            $user->biology=$req->input('biology');
            $user->math=$req->input('math');
            $user->psychology=$req->input('psychology');
            $user->save();
            Toastr::success('Data Added Successfully ','Success');
            return back(); //->with('status', 'Data inserted!');
    
        }
    }



    public function viewdetails()
    {
        $data = studentdetails::all();
   
      return view('/students/viewdetails',["data"=>$data]);
 
    }


    public function chart($id)
    {
        $data= studentdetails::find($id);
        return view('/students/chart',["data"=>$data]);


    }


}

