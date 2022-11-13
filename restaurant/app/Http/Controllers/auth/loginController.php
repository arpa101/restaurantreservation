<?php
namespace App\Http\Controllers\Auth;
use App\Models\menu;
  

use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;
use Session;

use App\Models\restaurantprime;
use App\Mail\otpmail;


class LoginController extends Controller
{
   
    public function Login(){
        return view('login');
    }
    public function postLogin(Request $request)

    {

        $request->validate([

            'email' => 'required',

            'password' => 'required',
            

        ]);

        $user= restaurantprime::where('email','=',$request->email)->first();
        $pass=restaurantprime::where('password','=',$request->password)->first();
        $loc=restaurantprime::where('location','=',$request->email)->first();
        if ($user && $pass) {
            $request->session()->put('id',$user['id']);
            $request->session()->put('name',$user['resName']);
            $request->session()->put('location',$user['location']);
            $request->session()->put('email',$user['email']);
            $request->session()->put('password',$user['password']);
            $request->session()->put('Rimage',$user['Rimage']);
            $data = menu::all();
            return view('showmenu',['data'=>$data]);
        }
    

        

  return back()->withInput()->withErrors(['password'=> 'email or password is wrong']);

    }
    public function profile(){
        return view('profile');
       }

       public function forget(){
        return view('forget');
    }

    public function forgetPass(Request $request){
        $request->validate([

            'email' => 'required',

        ]);
        $user= restaurantprime::where('email','=',$request->email)->first();

        if($user){
            $pin = mt_rand(1000000, 9999999);
            $data=str_shuffle($pin);
            Mail::to($user)->send(new otpmail($data));
            return view('verify');
        }
        else {
            return back()->withInput()->withErrors(['email'=> 'email not found']);
        }
        $request->validate([

            'vnum' => 'required',

        ]);

       $code= $request->all();
       if($code==$data){
        return view('reset');
       }
       
       return back()->withInput()->withErrors(['vnum'=>'wrong OTP']);
      
    }


    }
    