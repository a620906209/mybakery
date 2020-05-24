@extends('layouts.main')
@section('title','home')
@section('content')
<style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }

    </style>
    <!-- Custom styles for this template -->
    <link href="carousel.css" rel="stylesheet">
  </head>
  <body>

  {{-- <img src="{{URL::asset('image/20180831103759450.jpg')}}" alt=""> --}}
<main role="main">

  <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active" style="width: 12px; height: 12px; margin: 5px 7px; cursor: pointer; background-color: rgb(102, 102, 102); border-radius: 50%; opacity: 0.5;"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="1" style="width: 12px; height: 12px; margin: 5px 7px; cursor: pointer; background-color: rgb(102, 102, 102); border-radius: 50%; opacity: 0.5;"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="2"style="width: 12px; height: 12px; margin: 5px 7px; cursor: pointer; background-color: rgb(102, 102, 102); border-radius: 50%; opacity: 0.5;"></li>
  </ol>
  <div class="carousel-inner">
    <div class="carousel-item active" style="width:100%;    ">
      <img src="image\img1.jpeg" class="d-block w-100"  alt="...">
    </div>
    <div class="carousel-item">
      <img src="image\img2.jpeg" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="image\img3.jpeg" class="d-block w-100" alt="...">
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
  <!-- Marketing messaging and featurettes
  ================================================== -->
  <!-- Wrap the rest of the page in another container to center all the content. -->

  <div class="container marketing">

    <!-- Three columns of text below the carousel -->
    <div class="row">
      <div class="col-lg-4">
        {{-- <svg class="bd-placeholder-img rounded-circle" width="140" height="140" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid slice" focusable="false" role="img" aria-label="Placeholder: 140x140"><title>Placeholder</title><rect fill="#777" width="100%" height="100%"/><text fill="#777" dy=".3em" x="50%" y="50%">140x140</text></svg> --}}
        <a href="/menu"><img class="container"src="image\m_img1.png" alt=""></a>
      </div><!-- /.col-lg-4 -->
      <div class="col-lg-4">
        {{-- <svg class="bd-placeholder-img rounded-circle" width="140" height="140" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid slice" focusable="false" role="img" aria-label="Placeholder: 140x140"><title>Placeholder</title><rect fill="#777" width="100%" height="100%"/><text fill="#777" dy=".3em" x="50%" y="50%">140x140</text></svg> --}}
        <a href="/menu"><img class="container"src="image\m_img2.png" alt=""></a>
      </div><!-- /.col-lg-4 -->
      <div class="col-lg-4">
        {{-- <svg class="bd-placeholder-img rounded-circle" width="140" height="140" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid slice" focusable="false" role="img" aria-label="Placeholder: 140x140"><title>Placeholder</title><rect fill="#777" width="100%" height="100%"/><text fill="#777" dy=".3em" x="50%" y="50%">140x140</text></svg> --}}
        <a href="/menu"><img class="container"src="image\m_img3.png" alt=""></a>
      </div><!-- /.col-lg-4 -->
    </div><!-- /.row -->


    <!-- START THE FEATURETTES -->

    <hr class="featurette-divider">

    <div class="row featurette">
      <div class="col-md-7">
        <h2 class="featurette-heading" style="color:#FF44FF;">這間蛋糕創立於民國78年(西元1989年)</h2>
        <p class="lead"style="color:#D200D2;">於台北縣新莊市幸福路成立第一家門市。</p>
        <h2 class="featurette-heading" style="color:#FF44FF;">於民國92年(西元2003年)</h2>
        <p class="lead"style="color:#D200D2;" >於泰山鄉泰林路成立第二家門市。
          共同為喜愛的朋友烘焙最棒的麵包糕點。
          自成立以來，我們使用最好的原物料和烘焙設備，更聘請鑽研烘焙數十年的麵包達人以及不斷創新的製作團隊。
          奇新蛋糕提供招牌生日蛋糕、彌月蛋糕、歐式麵包、台式麵包、中式訂婚喜餅與精緻西點等烘焙製品。
          配合宴會、會議提供擺盤點心或手提餐盒等
          另外提供代訂壽桃、壽麵、麵龜、鐵盒喜餅等服務
          如有所需均可至來電詢問。
        </p>
      </div>
      <div class="col-md-5">
        <img src="image\info.jpg" alt="">
      </div>
    </div>
    <hr class="featurette-divider">
@endsection

