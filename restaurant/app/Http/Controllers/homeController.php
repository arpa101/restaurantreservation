<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\menu;
use App\Models\booking;
class homeController extends Controller
{
    function showhome(){
        $data=menu::inRandomOrder()
        ->limit(8) // here is yours limit
        ->get();
        return view('home/home',['data'=>$data]);
        
    }
    function showapp(){
        $data = menu::where('category', 'appetizer')->get();
        return view('menucard/appe',['data'=>$data]);
    }
    function showlunch(){
        $data = menu::where('subcategory', 'Lunch')->get();
        return view('menucard/lunch',['data'=>$data]);
    }
    function showdinner(){
        $data = menu::where('subcategory', 'Dinner')->get();
        return view('menucard/dinner',['data'=>$data]);
    }
    function showdessert(){
        $data = menu::where('category', 'Dessert')->get();
        return view('menucard/dessert',['data'=>$data]);
    }
    function showdrink(){
        $data = menu::where('category', 'Drinks')->get();
        return view('menucard/drink',['data'=>$data]);
    }

    function showmenu(){
        
        return view('home/hmenu');
    }
    function booking(Request $req){
        $mail = $req->get('emaill');
        $num= $req->get('num');
        $time= $req->get('time');
        $date= $req->get('date');
   
        $prod= new booking();
        $prod->emaill=$mail;
        $prod->num=$num;
        $prod->time=$time;
        $prod->date=$date;
        $prod->save();
        
        return redirect()->back();

    }
    public function addToCart($id)

    {

        $product = menu::findOrFail($id);

          

        $cart = session()->get('cart', []);

  

        if(isset($cart[$id])) {

            $cart[$id]['quantity']++;

        } else {

            $cart[$id] = [

                "name" => $product->itemname,

                "quantity" => 1,

                "price" => $product->price,

                "image" => $product->foodimage

            ];

        }

          

        session()->put('cart', $cart);

        return redirect()->back()->with('success', 'Product added to cart successfully!');

    }
    public function cart()

    {

        return view('cart');

    }
    public function update(Request $request)

    {

        if($request->id && $request->quantity){

            $cart = session()->get('cart');

            $cart[$request->id]["quantity"] = $request->quantity;

            session()->put('cart', $cart);

            session()->flash('success', 'Cart updated successfully');

        }

    }
    public function remove(Request $request)

    {

        if($request->id) {

            $cart = session()->get('cart');

            if(isset($cart[$request->id])) {

                unset($cart[$request->id]);

                session()->put('cart', $cart);

            }

            session()->flash('success', 'Product removed successfully');

        }
    }

}
