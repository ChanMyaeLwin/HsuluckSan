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
                            <p class="carousel-subtitle-v2" data-animation="animated fadeInUp">We cannot foresee our luck coming to us <br/>
                            </p>
                        </div>
                    </div>
                </div>
                
                <!-- Second slide -->
                <div class="item carousel-item-five">
                    <div class="container">
                        <div class="carousel-position-four text-center">
                            <h2 class="animate-delay carousel-title-v4" data-animation="animated fadeInDown">
                               EVEN ONE TICKET
                            </h2>
                            <p class="carousel-subtitle-v2" data-animation="animated fadeInDown">
                                CAN CHANGE
                            </p>
                            <p class="carousel-subtitle-v3 margin-bottom-30" data-animation="animated fadeInUp">
                               YOUR LIFE
                            </p>
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
                                  WITH SU LUCK SAN
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
        
          <!-- BEGIN SIDEBAR -->
          <div class="sidebar col-md-3 col-sm-4">
            <ul class="breadcrumb">
                <li><a href="index.html">Home</a></li>
                <li class="active">Latest News</li>
            </ul>
            <ul class="list-group margin-bottom-25 sidebar-menu">
              <li class="list-group-item clearfix"><a href="shop-product-list.html"><i class="fa fa-angle-right"></i> Latest News 1</a></li>
              <li class="list-group-item clearfix"><a href="shop-product-list.html"><i class="fa fa-angle-right"></i> Latest News 2</a></li>
              <li class="list-group-item clearfix"><a href="shop-product-list.html"><i class="fa fa-angle-right"></i> Latest News 3</a></li>
            </ul>
          </div>
          <!-- END SIDEBAR -->
          <!-- BEGIN CONTENT -->
          <div class="col-md-9 col-sm-8">
            <div class="content-search margin-bottom-20">
              <div class="row">
                <div class="col-md-6">
                  <h1>Today Lucky Tickets for <em>You</em></h1>
                </div>
                <div class="col-md-6">
                  <a href="" class="btn btn-default add2cart">View All Tickets</a>
                </div>
              </div>
            </div>
            
            <div class="owl-carousel owl-carousel3">
              <div>
                <div class="product-item">
                  <div class="pi-img-wrapper">
                    <img src="{{ asset('pages/img/products/k1.jpg')}}" class="img-responsive" alt="Berry Lace Dress">
                  </div>
                  <h3>ka/123212</h3>
                  <div class="pi-price pi-available">Available</div>
                  <a href="javascript:;" class="btn btn-default add2cart">Add to cart</a>
                  <!-- <div class="sticker sticker-new"></div> -->
                </div>
              </div>
              <div>
                <div class="product-item">
                  <div class="pi-img-wrapper">
                    <img src="{{ asset('pages/img/products/k2.jpg')}}" class="img-responsive" alt="Berry Lace Dress">
                  </div>
                  <h3>ka/123212</h3>
                  <div class="pi-price pi-unavailable">Unavialbel</div>
                </div>
              </div>
              <div>
                <div class="product-item">
                  <div class="pi-img-wrapper">
                    <img src="{{ asset('pages/img/products/k1.jpg')}}" class="img-responsive" alt="Berry Lace Dress">
                  </div>
                  <h3>ka/123212</h3>
                  <div class="pi-price pi-available">Available</div>
                  <a href="javascript:;" class="btn btn-default add2cart">Add to cart</a>
                  <!-- <div class="sticker sticker-new"></div> -->
                </div>
              </div>
              
              
            </div>
          </div>
          <!-- END CONTENT -->
        </div>
        <!-- END SIDEBAR & CONTENT -->
      </div>
    </div>

      
      

@endsection