@extends('layouts.main')
@section('content')

<div class="container py-5">

    <div class="row">

      <div class="col-lg-3">

        <h1 class="my-4">Bakery</h1>
        <div class="list-group">
          <a href="{{ route('menu') }}/1" class="list-group-item">蛋糕</a>
          <a href="{{ route('menu') }}/3" class="list-group-item">餅乾</a>
          <a href="{{ route('menu') }}/2" class="list-group-item">糖果</a>
        </div>

      </div>
      <!-- /.col-lg-3 -->

      <div class="col-lg-9">

        <div class="row">
          @if (empty($result) >= 1)
          @foreach($products as $product)
          <div class="col-lg-4 col-md-6 mb-4">
            <div class="card h-90">
              <a href="#"><img class="card-img-top" src="http://placehold.it/700x400" alt=""></a>
              <div class="card-body">
                <h4 class="card-title">
                    
                  <a href="#">{{ $product->product_name }}</a>
                </h4>
                <h5>NT.{{ $product->product_price }}</h5>
                    
                <p class="card-text"></p>
                <div class="btn btn-primary">加入購物車</div>
              </div>
            </div>
          </div>
          @endforeach
          @else
          <a href="">oops not found!</a>
          @endif


        </div>
        <!-- /.row -->

      </div>
      <!-- /.col-lg-9 -->

    </div>
    <!-- /.row -->

  </div>
  <!-- /.container -->

  <!-- Footer -->
{{--   <footer class="py-5 bg-dark">
    <div class="container">
      <p class="m-0 text-center text-white">Copyright &copy; Your Website 2019</p>
    </div>
    <!-- /.container -->
  </footer>
 --}}


@endsection