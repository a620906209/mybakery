<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use App\Cart;
use Session;

class shoppingcartController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()

    {
        // $products = Product::where('id', '>=', 1)->paginate(3);
        // return view('shoppingcart')->with( 'products',$products);
        return view('shoppingcart');
    }
    

    public function getAddToCart(Request $request,$id){
        $product = Product::find($id);
        $oldCart = Session::has('cart')? Session::get('cart') : null;
        $cart = new Cart($oldCart);
        $cart->add($product,$product->id);

        $request->session()->put('cart',$cart);
        // dd($request->session()->get('cart'));
        return redirect()->route('menu');

    }
    public function getCart()
    {
        if (!Session::has('cart')) {
            return view('shoppingcart', ['products' => null]);
        }
        $oldCart = Session::get('cart');
        $cart = new Cart($oldCart);
        return view('shoppingcart', ['products' => $cart->items, 'totalPrice' => $cart->totalPrice,'totalQty' =>$cart->totalQty]);
    }

    public function cancelsession(){

        session()->forget('cart');
        return redirect()->route('shoppingCart');

    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request)
    {
        // $data = $request->input();
        // if ($request->session()->has('product_name')) {
        //     $request->session()->push('product',$data);
        //     $output= $request->session()->get('product');
        // }else{
            
        //     $request->session()->put('product', $data);
        //     $output=$request->session()->get('product');
        // }
        // // if ($output['product_name']=="巧克力蛋糕") {
        // //     echo "session is here";
        // //     print_r($output['product_name']);
        // //     print_r($output['product_price']);
        // // }else{
        // //     echo "session is not here";
        // // }
        // $data=$request->input();


           
        // return view('shoppingcart')->with('data', $output);

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
