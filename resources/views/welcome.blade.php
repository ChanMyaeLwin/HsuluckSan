@extends('layouts.master')

@section('content')

<!-- BEGIN SLIDER -->
<div class="page-slider margin-bottom-35">
        <div id="carousel-example-generic" class="carousel slide carousel-slider">
            <!-- Indicators -->
            <ol class="carousel-indicators">
                <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                <li data-target="#carousel-example-generic" data-slide-to="1"></li>
                <li data-target="#carousel-example-generic" data-slide-to="2"></li>
                <li data-target="#carousel-example-generic" data-slide-to="3"></li>
            </ol>

            <!-- Wrapper for slides -->
            <div class="carousel-inner" role="listbox">
                <!-- First slide -->
                <div class="item carousel-item-four active">
                    <div class="container">

                        <div class="carousel-position-four text-center">
                            <h2 class="margin-bottom-20 animate-delay carousel-title-v3 border-bottom-title text-uppercase" data-animation="animated fadeInDown">
                                Try  <br/><span class="color-red-v2">Lottery</span><br/> Today
                            </h2>
                            <p class="carousel-subtitle-v2" data-animation="animated fadeInUp">We cannot foresee our luck coming to us <br/> <br/>
                            <a class="carousel-btn" href="{{route('tickets.searchView')}}" data-animation="animated fadeInUp">Shop Now!</a>
                            </p>
                        </div>
                    </div>
                </div>
                
                <!-- Second slide -->
                <div class="item carousel-item-five">
                    <div class="container">
                        <div class="carousel-position-four text-center">
                            <h2 class="margin-bottom-20 animate-delay carousel-title-v3 border-bottom-title text-uppercase" data-animation="animated fadeInDown">
                            <span class="color-red-v2">  EVEN ONE TICKET </span>
                            </h2>
                            <p class="carousel-subtitle-v2" data-animation="animated fadeInDown">
                                CAN CHANGE
                            </p>
                            <h2 class="margin-bottom-20 animate-delay carousel-title-v3 border-bottom-title text-uppercase" data-animation="animated fadeInDown">
                            <span class="color-red-v2"> YOUR LIFE </span>
                            </h2>
                            <a class="carousel-btn" href="{{route('tickets.searchView')}}" data-animation="animated fadeInUp">Search Lottery</a>
                        </div>
                        <!-- <img class="carousel-position-five animate-delay hidden-sm hidden-xs" src="{{ asset('pages/img/shop-slider/slide2/price.png')}}" alt="Price" data-animation="animated zoomIn"> -->
                    </div>
                </div>

                <div class="item carousel-item-five">
                    <div class="container">
                        <div class="carousel-position-four text-center">
                            <h2 class="margin-bottom-20 animate-delay carousel-title-v3 border-bottom-title text-uppercase" data-animation="animated fadeInDown">
                            <span class="color-red-v2">    SU LUCK SAN </span>
                            </h2>
                            <p class="carousel-subtitle-v2" data-animation="animated fadeInDown">
                                WILL SUPPORT TO GET
                            </p>
                            <h2 class="margin-bottom-20 animate-delay carousel-title-v3 border-bottom-title text-uppercase" data-animation="animated fadeInDown">
                            <span class="color-red-v2"> YOUR LUCK </span>
                            </h2>
                            <a class="carousel-btn" href="{{route('tickets.searchView')}}" data-animation="animated fadeInUp">Search Lottery</a>
                        </div>
                        <!-- <img class="carousel-position-five animate-delay hidden-sm hidden-xs" src="{{ asset('pages/img/shop-slider/slide2/price.png')}}" alt="Price" data-animation="animated zoomIn"> -->
                    </div>
                </div>

        
                <!-- Third slide -->
                <div class="item carousel-item-seven">
                   <div class="center-block">
                        <div class="center-block-wrap">
                            <div class="center-block-body">
                              <h2 class="carousel-title-v1 margin-bottom-20" data-animation="animated fadeInDown">
                                SHAPE YOUR DREAM<br/>
                                <span class="color-red-v2">WITH SU LUCK SAN</span>
                                </h2>
                                <a class="carousel-btn" href="{{route('tickets.searchView')}}" data-animation="animated fadeInUp">Shop Now!</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Controls -->
            <a class="left carousel-control carousel-control-shop" href="#carousel-example-generic" role="button" data-slide="prev">
                <i class="fa fa-angle-left" aria-hidden="true"></i>
            </a>
            <a class="right carousel-control carousel-control-shop" href="#carousel-example-generic" role="button" data-slide="next">
                <i class="fa fa-angle-right" aria-hidden="true"></i>
            </a>
        </div>
    </div>
    <!-- END SLIDER -->

    <div class="main">
      <div class="container">
        <!-- BEGIN SIDEBAR & CONTENT -->
        <div class="row margin-bottom-40 ">
        
         
          <!-- BEGIN CONTENT -->
          <div class="col-md-9 col-sm-8">
            <div class="content-search margin-bottom-20">
              <div class="row">
                <div class="col-md-6">
                  <h1>Today Three Lucky Tickets for <em>You</em></h1>
                </div>
                <div class="col-md-6">
                  <a href="{{route('tickets.searchView')}}" class="btn btn-default add2cart">View All Tickets</a>
                </div>
              </div>
            </div>
            
            <div class="owl-carousel owl-carousel3">
            @if($tickets)
              @foreach ($tickets as $key => $ticket)
              <div>
                <div class="product-item">
                  <div class="pi-img-wrapper">
                    <!-- <img src="{{ asset('pages/img/products/k1.jpg')}}" class="img-responsive" alt="Berry Lace Dress"> -->
                  </div>
                  <h3>{{$ticket->name}}</h3>
                     <div class="pi-price pi-available">Available</div>
                     <button class="btn btn-default add2cart" onclick="buyticket('{{$ticket->id}}')">BUY NOW</button>
                  <!-- <div class="sticker sticker-new"></div> -->
                </div>
              </div>
              @endforeach
            @endif
            </div>
          </div>
          <!-- END CONTENT -->
           <!-- BEGIN SIDEBAR -->
           <div class="sidebar col-md-3 col-sm-4">
            <ul class="breadcrumb">
                <li><a href="{{route('welcome')}}">Home</a></li>
                <li class="active">Latest News</li>
            </ul>
            <ul class="list-group margin-bottom-25 sidebar-menu">
              <li class="list-group-item clearfix"><a href="#"><i class="fa fa-angle-right"></i> Latest News 1</a></li>
              <li class="list-group-item clearfix"><a href="#"><i class="fa fa-angle-right"></i> Latest News 2</a></li>
              <li class="list-group-item clearfix"><a href="#"><i class="fa fa-angle-right"></i> Latest News 3</a></li>
            </ul>
          </div>
          <!-- END SIDEBAR -->
        </div>
        <!-- END SIDEBAR & CONTENT -->
      </div>
    </div>


   

      
      

@endsection
