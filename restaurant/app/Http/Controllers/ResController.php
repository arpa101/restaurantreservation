<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth;

use Session;

use App\Models\restaurantprime;
use App\Models\menu;
use App\Models\booking;

class ResController extends Controller
{
    public function showdata(){
        return view('resinfo');
    }
    public function addmenu(){
        return view('addmenu');
    }

    function showmenu(){
        $data = menu::all();
        return view('showmenu',['data'=>$data]);
    }
    function showbooking(){
        $data = booking::all();
        return view('booking',['data'=>$data]);
    }
    function insert(Request $req){
        $category = $req->get('category');
        $sub= $req->get('subcategory');
        $name= $req->get('itemname');
        $ing= $req->get('ingredients');
        $price= $req->get('price');
        $img= $req->file('fileName')->getClientOriginalName(); 
                 //move uploaded file
        $req->fileName->move(public_path('images'),$img);
   
        $prod= new menu();
        $prod->category=$category;
        $prod->subcategory=$sub;
        $prod->itemname=$name;
        $prod->ingredients=$ing;
        $prod->price=$price;
        $prod->foodimage=$img;
        $prod->resId=session('id');
        $prod->save();
        

        return view('resinfo');

    }
   
}
