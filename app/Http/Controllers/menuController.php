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
        // $products = Product::where('product_price','=',$id)->first(); 
        // return Product::where('product_price','=',$id)->get();

        // return Product::all();
        // $result=array($products);


        return view('menu')->with('products',$products);
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
     * @param  int  $idate(format)s
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $select = Product::where('product_type','=',$id)->paginate();

        // $num =0;
        //     foreach ($select as $value) {
        //         $num = $num + 1;
        //     };
        // data={
        //     $products => $select,
        //     $count => $num,
        // }

        return view('menu')->with('products',$select);
            // return $select;
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
