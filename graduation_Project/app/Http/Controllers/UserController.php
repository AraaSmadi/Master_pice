<?php

namespace App\Http\Controllers;

use App\Models\time;
use App\Models\images;
use App\Models\users;
use App\Models\message;
use App\Models\User;
use App\Models\reservetion;

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
        $users->Image = $image;

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
                $req->session()->put('role', $user->role);
                return redirect('/');
            } else {
                return redirect('/Login')->with('pass', 'Password incorrect');
            }
        } else {
            return redirect('/Login')->with('email', 'Email does not exist');
        }
    }

    public function logout()
    {
        if (session()->has('name')) {
            session()->pull('name');
            session()->pull('id');
            session()->pull('role');
        }
        return redirect('/');
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
        $data2 = users::all()->where('role', 3); //accepted
        $data3 = users::all()->where('role', 4); //reject
        return view('/dashboard.photographer', compact(['data', 'data2', 'data3']));
    }
    public function rejected($id)
    {
        $user = Users::where('id', $id)->first();
        $user->role = 4;
        $user->save();
        return view('/dashboard.photographer');
    }
    public function accepted($id)
    {
        $user = Users::where('id', $id)->first();
        $user->role = 3;
        $user->save();
        return view('/dashboard.photographer');
    }

    //photographer dashboard


     //reservition dashboard
     public function book_dashboard()
     {
         $data = reservetion::all()->where('role', 1)->where('user_id', session()->get('id'));
         $data2 = reservetion::all()->where('role',2)->where('user_id', session()->get('id')); //accepted
         $data3 = reservetion::all()->where('role', 3)->where('user_id', session()->get('id')); //reject
         return view('/dashboard.reservition', compact(['data', 'data2', 'data3']));
     }
     public function rejected_book($id)
     {
         $user = reservetion::where('id', $id)->first();
         $user->role = 3;
         $user->update();
         return view('/dashboard.photographer');
     }
     public function accepted_book($id)
     {
         $user = reservetion::where('id', $id)->first();
         $user->role = 2;
         $user->update();
         return view('/dashboard.photographer');
     }

     //reservition dashboard
    public function users()
    {
        $data = users::all()->where('role', 5);
        return view('/dashboard.users', compact('data'));
    }




    public function imagesTime($id)
    {
        $data1 = time::all()->where('user_id', $id);
        $data2 = images::all()->where('user_id', $id);
        return view('/singlephot', compact('data1' , 'data2'));
    }


    public function getmessage()
    {
        $data = message::all();
        return view('/dashboard.messages', compact('data'));
    }



    public function Contact(Request $req)
    {
        $req->validate([
            'name' => 'required',
            'email' => 'required',
            'subject' => 'required',
            'message' => 'required',
        ]);

        $messages = new message();
        $messages->name = $req->name;
        $messages->email = $req->email;
        $messages->subject = $req->subject;
        $messages->message = $req->message;
        $messages->save();
        return redirect("/contact")->with('success', 'User has been added successfully');
    }
    public function singlePage($id)
    {
        $user = User::find($id);
        // dd($user);
        return view('singlephot', compact('user'));
    }

    public function Booking($id)
    {
        $user = User::find($id);
        session()->put('photo_id', $id);

        // dd($user);
        return view('service', compact('user'));
    }
    public function reserve( Request $req )
    {
        $req->validate([
            'name'=> 'required',
            'date' => 'required',
            'phone' => 'required',
            'hour' => 'required',
            'email' => 'required',
        ]);

        $reservetion = new reservetion();

        $reservetion->name = $req->name;
        $reservetion->email = $req->email;
        $reservetion->phone = $req->phone;
        $reservetion->date = $req->date;
        $reservetion->hour = $req->hour;
        $reservetion->user_id = session()->get('photo_id');
        $reservetion->role = 1;
        $reservetion->save();
        return redirect("service")->with('success', 'reservetion has been added successfully');
    }



    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;
}
