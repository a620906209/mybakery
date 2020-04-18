<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;

class menuController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products = Product::where('id','>=',1)->paginate(9); 
        // dd($products);
        return view('menu')->with('products',$products);
    }


    /**
     * Display the specified resource.
     *
     * @param  int  $idate(format)s
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        // $search = Product::where('product_type', '=', $id)->get();
        // // dd(count($search));
        // if(count($search)>0){

            $select = Product::where('product_type', '=', $id)->paginate(6);
            return view('menu')->with('products', $select);
            
        // }
        // // else{
        //     return redirect('menu');
        // }
        
        
    }
}
