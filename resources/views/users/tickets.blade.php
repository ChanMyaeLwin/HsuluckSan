@extends('layouts.master')

@section('content') 
<div class="main">
  <div class="container">
    <!-- BEGIN SIDEBAR & CONTENT -->
    <div class="row margin-bottom-40">
     
      <!-- BEGIN CONTENT -->
      <div class="col-md-9 col-sm-9">
          <h1>My Tickets</h1>
          
          <div class="faq-page">
            <div class="panel panel-default">
                <div id="accordion1_3" class="panel-collapse collapse  in">
                  <div class="goods-data compare-goods clearfix">           
                      <table summary="Product Details">
                   
                        <tr>
                          <td class="compare-info">
                            Date
                          </td>
                          <td class="compare-info">
                            Ticket No
                          </td>
                          <td class="compare-info">
                            Amount
                          </td>
                        </tr>
                        @if($usertickets)
                        @foreach ($usertickets as $key => $ticket)
                        <tr>
                        
                          <td class="compare-info">
                            {{date('d-m-Y h:m', strtotime($ticket->created_at))}}
                          </td>
                          <td class="compare-info">
                          {{$ticket->tickets->name}}
                          </td>
                          <td class="compare-info">
                           1000 MMK
                          </td>
                        </tr>
                        @endforeach
                        @endif
                      </table>
                      @if($usertickets)
                      <div class="card-footer clearfix">
                          <ul class="pagination pagination-sm m-0 float-right">
                          {!! $usertickets->render() !!}
                          </ul>
                      </div>
                      @endif
                      </div>
                </div>
            </div>
          </div>
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