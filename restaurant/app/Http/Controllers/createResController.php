<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Mail;
use Illuminate\Http\Request;
use App\Models\restaurantprime;
use App\Mail\resmail;
class createResController extends Controller
{
    //
    public function add(){
        return view('createrestaurant');
    }
    public function view(){
        return view('showdata');
    }
    function insert(Request $req){
        $req->validate([
            'resName'=>'required',
            'location'=>'required',
            'email'=> 'required|email|unique:restaurantprimes',
            'password' => 'required|min:6',
        ]);
        $Rname = $req->get('resName');
        $location= $req->get('location');
        $email= $req->get('email');
        $pass= $req->get('password');
        $img= $req->file('fileName')->getClientOriginalName();
        //move uploaded file
        $req->fileName->move(public_path('images'),$img);
         
        $prod= new restaurantprime();
        $prod->resName=$Rname;
        $prod->location=$location;
        $prod->email=$email;
        $prod->password=$pass;
        $prod->Rimage=$img;
        $prod->save();

        $data=[
            'name' => $Rname,
            'email'=> $email,
            'password'=> $pass
        ];
        Mail::to($email)->send(new resmail($data));
        return redirect('/');
    }
    public function delete($id)
    {
        $stock = restaurantprime::find($id);
        $stock->delete(); // Easy right?
 
        return redirect('/')->with('success');  // -> resources/views/stocks/index.blade.php
    } 
    function readdata(){
        $rdata= restaurantprime::all();
        return view('showdata',['data'=>$rdata]);
    }
    function editinfo($id){
        $item = restaurantprime::find($id);
        return view('resupdate',['item'=>$item]);
    }

    
    public function edit(Request $req, $id){
        $prod = restaurantprime::find($id);
        $Rname = $req->get('resName');
        $location= $req->get('location');
        $email= $req->get('email');
        $pass= $req->get('password');
        $img= $req->file('fileName')->getClientOriginalName();
        //move uploaded file
        $req->fileName->move(public_path('images'),$img);
         
        $prod= new restaurantprime();
        $prod->resName=$Rname;
        $prod->location=$location;
        $prod->email=$email;
        $prod->password=$pass;
        $prod->Rimage=$img;
        $prod->save();

        return redirect('/');
    }
    
}
