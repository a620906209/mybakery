<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use Cart;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth')->except('index','show');
    }
    public function index()
    {
        $products = Product::where('id', '>=', 1)->paginate(9);
        return view('formtest')->with('products', $products);
    }
    public function destorycart()
    {
        Cart::clear();
        return redirect('menu');
    }
    public function cart()
    {
        $cartCollection = Cart::getContent();
        return view('form',['datas' => $cartCollection]);
    }
    public function cancelitem($id)
    {
        Cart::remove($id);
        return redirect('cart');
    }
    public function add(Request $res)
    {
        $add = Cart::add([
            'id' => $res->product_id,
            'name' => $res->product_name,
            'price' => $res ->product_price,
            'quantity' => $res->qty
        ]);
        if ($add)
        {
            return redirect('menu');
        }    
    }


    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */

    public function show($id)
    {
        $select = Product::where('product_type', '=', $id)->paginate(6);
        return view('formtest')->with('products', $select);
    }

}
