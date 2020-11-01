@extends('layouts.master')

@section('content') 
<div class="main">
      <div class="container">
        <!-- BEGIN SIDEBAR & CONTENT -->
        <div class="row margin-bottom-40">
        
          <!-- BEGIN CONTENT -->
          <div class="col-md-9 col-sm-7">
            <div class="content-search margin-bottom-20">
              <div class="row">
                <div class="col-md-6">
                  <h1>Search result for <em>You lucky Ticket</em></h1>
                </div>
                <div class="col-md-6">
                  <form method="GET" action="{{ route('tickets.search') }}">
                  @csrf
                    <div class="input-group">
                      <input type="text" name="ticket_no" placeholder="Search again" class="form-control" value="{{ $ticket_no }}">
                      <span class="input-group-btn">
                        <button class="btn btn-primary" type="submit">Search</button>
                      </span>
                    </div>
                  </form>
                </div>
              </div>
            </div>
            
            <!-- BEGIN PRODUCT LIST -->
            <div class="row product-list">
              <!-- PRODUCT ITEM START -->
              @foreach ($tickets as $key => $ticket)
              <div class="col-md-4 col-sm-6 col-xs-12">
                <div class="product-item">
                  <!-- <div class="pi-img-wrapper">
                    <img src="assets/pages/img/products/model1.jpg" class="img-responsive" alt="Berry Lace Dress">
                  </div> -->
                  <h3><a href="shop-item.html">{{ $ticket->name }}</a></h3>
                  @if($ticket->status == 1)
                     <div class="pi-price pi-available">Available</div>
                     <button class="btn btn-default add2cart" onclick="buyticket('{{$ticket->id}}')">BUY NOW</button>
                  @else
                     <div class="pi-price pi-unavailable">Unavailable</div>
                  @endif
              
                </div>
              </div>
              @endforeach
              <!-- PRODUCT ITEM END -->
            </div>
            
            <!-- END PRODUCT LIST -->
            <!-- BEGIN PAGINATOR -->
            <div class="row">>{!! $tickets->render() !!}</div>
            <!-- END PAGINATOR -->
          </div>
          <!-- END CONTENT -->
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
        </div>
        <!-- END SIDEBAR & CONTENT -->
      </div>
    </div>
      
@endsection