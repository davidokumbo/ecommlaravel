<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Models\product;
use App\Models\Cart;
use App\Models\Order;
use Session;

class productController extends Controller
{
    public function index(){
        $data = product::all();
        return view('product',['products'=>$data]);
    }
    public function detail($id){
        $data=product::find($id);
        return view('/detail',['product'=>$data]);
    }
    function addToCart(Request $req){
        if($req->session()->has('user')){
            $cart = new Cart;
            $cart->user_id = $req->session()->get('user')['id'];
            $cart->product_id = $req->product_id;
            $cart->save();
            return redirect('/');
        }
        else{
            return redirect('/login');
        }
    }

    static function cartItem(){

     $userid = Session::get('user')['id'];
     return Cart::where('user_id', $userid)->count();
        
    }
    function cartList(){
        $userid = Session::get('user')['id'];
        $products = DB::table('cart')
            ->join('products', 'cart.product_id', 'products.id')
            ->where('cart.user_id', $userid)
            ->select('products.*','cart.id as cart_id')
            ->get();
        return view('cartlist', ['products' => $products]);
    }

    function removeCart($id){
        Cart::destroy($id);
        return redirect('cartlist');
    
    }
    function orderNow(){
        $userid = Session::get('user')['id'];
        $total= DB::table('cart')
            ->join('products', 'cart.product_id', 'products.id')
            ->where('cart.user_id', $userid)
            ->select('products.*','cart.id as cart_id')
            ->sum('products.price');
        return view('ordernow', ['total' => $total]);
    }
    function orderPlace(Request $req){
        $userid=Session::get('user')['id'];
        $allCart=Cart::where('user_id',$userid)->get();

        foreach ($allCart as $cart) 
        {
            $order=new Order;
            $order->product_id=$cart['product_id'];
            $order->user_id=$cart['user_id'];
            $order->status="pending";
            $order->payment_method=$req->payment;
            $order->payment_status="pending";
            $order->address=$req->address;
            $order->save();
            Cart::where('user_id',$userid)->delete();

         }       
         return redirect('/');
    }
 
    function myOrders(){
        $userid = Session::get('user')['id'];
        $orders= DB::table('orders')
            ->join('products', 'orders.product_id', 'products.id')
            ->where('orders.user_id', $userid)
            ->get();
            return view('myorders', ['orders' => $orders]);
       
    }
}

