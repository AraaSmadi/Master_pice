<?php

namespace App\Http\Controllers;

use App\Models\users;
use App\Models\message;
use App\Models\User;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Http\Request;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Support\Facades\Crypt;

class UserController extends BaseController
{
    public function SignUp(Request $req)
    {
        $req->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users,email',
            'phone' => 'required|unique:users,phone|regex:/^([0]{1}[7-9]{1})([0-9]{8})$/',
            'image' => 'required',
            'role' => 'required',
            'password' => 'required|regex:/^(?=.*?[A-Z])(?=.*?[a-z])(?=.*?[0-9])(?=.*?[#?!@$%^&*-]).{6,}$/',
            'password_confirmation' => 'required|regex:/^(?=.*?[A-Z])(?=.*?[a-z])(?=.*?[0-9])(?=.*?[#?!@$%^&*-]).{6,}$/',
        ]);
        $pass = $req->password;
        $confirm_pass = $req->password_confirmation;
        if ($pass !== $confirm_pass) {
            return redirect("/registeration")->with('match', 'Confirm Password does not match');
        }
        $users = new users();
        $users->name = $req->name;
        $users->email    = $req->email;
        $users->phone = $req->phone;

        $image = $req->file('image')->Move('img', $req->image->getClientOriginalName());
        $users->Image =$image ;

        $users->role = $req->role;
        $users->password = Crypt::encrypt($pass);
        $users->save();
        return redirect("/Login")->with('success', 'User has been added successfully');
    }


    public function Login(request $req)
    {

        $email = $req->email;
        $pass = $req->password;
        $user = Users::where('email', $email)->first();
        if ($user) {
            if (Crypt::decrypt($user->password) == $pass) {
                $req->session()->put('id', $user->id);
                $req->session()->put('name', $user->name);
                return redirect('/');
            } else {
                return redirect('/Login')->with('pass', 'Password incorrect');
            }
        } else {
            return redirect('/Login')->with('email', 'Email does not exist');
        }
    }


    public function showall()
    {
        $data = users::all()->where('role', 3);
        return view('/index', compact('data'));
    }
    public function photographer()
    {
        $data = users::all()->where('role', 3);
        return view('/photographers', compact('data'));
    }
//photographer dashboard
    public function photo_dashboard()
    {
        $data = users::all()->where('role', 2);
        $data2 = users::all()->where('role', 3);//accepted
        $data3 = users::all()->where('role', 4);//reject
        return view('/dashboard.photographer', compact(['data' , 'data2' , 'data3']));
    }
    public function rejected($id)
    {
        $user = Users::where('id', $id)->first();
        $user->role = 4;
        $user->save();
        return view('/dashboard.photographer');
    }
    public function accepted($id)
    {   $user = Users::where('id', $id)->first();
        $user->role = 3;
        $user->save();
        return view('/dashboard.photographer');
    }

    //photographer dashboard
    public function users()
    {
        $data = users::all()->where('role', 5);
        return view('/dashboard.users', compact('data'));
    }
    public function Contact(Request $req)
    {
        $req->validate([
            'name' => 'required',
            'email' => 'required',
            'subject' => 'required',
            'message' =>'required',
          ]);

        $messages = new message();
        $messages->name = $req->name;
        $messages->email= $req->email;
        $messages->subject = $req->subject;
        $messages->message = $req->message;
        $messages->save();
        return redirect("/contact")->with('success', 'User has been added successfully');
    }
public function singlePage($id){
$user=User::find($id);
// dd($user);
return view('singlephot',compact('user'));
}

    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;
}
