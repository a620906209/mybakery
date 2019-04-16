@extends('layouts.main')
@section('content')


<table class="table">
  <thead>
    <tr>
      <th scope="col">商品</th>
      <th scope="col">價格</th>
      <th scope="col">數量</th>
      <th scope="col">小記</th>
      <th scope="col">取消</th>
    </tr>
  </thead>
  <tbody>
     
    <tr>
      @if(Session::has('cart'))
        @foreach($products as $product)
          <th scope="row">{{ $product['item']['product_name']}}</th>
            <td>{{ $product['item']['product_price']}}</td>
            <td>{{$product['qty']}}</td>
            <td>{{ $product['item']['product_price'] * $product['qty']}}</td>
            <td class="btn btn-danger"><a href="{{route('cancel',$product['item']['id'])}}">X</a></td>
          </tr>
        @endforeach

  </tbody>
<th colspan="5" class="blockquote text-right">購物車內合計有{{$totalQty}}項商品，總計NT$ {{$totalPrice}}</th>
</table>
@endif

  
@endsection