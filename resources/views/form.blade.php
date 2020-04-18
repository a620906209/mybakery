@extends('layouts.main')
@section('content')
@if (empty($data) >= 1)
@foreach($datas as $data)
<h4>{!!Form::open()!!}
<h5>{{Form::label("id",$data->id)}}</h5>{{Form::hidden("id",$data->id)}}
<h5>{{Form::label("name",$data->name)}}</h5>{{Form::hidden("name",$data->name)}}
<h5>價格:{{Form::label("price",$data->price)}}</h5>{{Form::hidden("price",$data->price)}}
<h5>數量:{{Form::label("qty",$data->quantity)}}</h5>{{Form::hidden("qty",$data->quantity)}}
<a href="{{route('formcancel',$data->id)}}"><h5>取消</h5></a>

</h4>
@endforeach
@endif
<h1>共NT.{{Cart::getSubTotal()}}元</h1>

{{-- <h1>共{{Cart::count()}}件</h1> --}}
{!!Form::close()!!}




@endsection