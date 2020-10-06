@extends('layouts.master')

@section('content') 
<div class="main">
      <div class="container">
        <!-- BEGIN SIDEBAR & CONTENT -->
        <div class="row margin-bottom-40">
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
          <div class="col-md-9 col-sm-9">
              <h1>My Balance</h1>
              <a class="btn btn-primary" href="javascript:;">Add Amount</a><br>
              <div class="faq-page">
                <div class="panel panel-default">
                    <div class="panel-heading">
                      <h4 class="panel-title">
                          <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion1" href="#accordion1_1">
                         {{$balance}} MMK
                          </a>
                      </h4>
                    </div>
                    <div id="accordion1_1" class="panel-collapse collapse  in">
                      <div class="panel-body">
                      <div class="table-wrapper-responsive">
                      <div class="goods-page">
              <div class="goods-data compare-goods clearfix">
                <div class="table-wrapper-responsive">                
                  <table summary="Product Details">                  
                  
                    <tr>
                      <th colspan="3">
                        <h2>History</h2>
                      </th>
                    </tr>
                    <tr>
                      <td class="compare-info">
                        Date
                      </td>
                      <td class="compare-info">
                        Amount
                      </td>
                      <td class="compare-info">
                        Operator
                      </td>
                    </tr>
                    <tr>
                      <td class="compare-info">
                        2.10.2020
                      </td>
                      <td class="compare-info">
                        10000 MMK
                      </td>
                      <td class="compare-info">
                        KBZ pay
                      </td>
                    </tr>
                  </table>
                  <p class="padding-top-20"><strong>Notice:</strong> This is example</p>
                </div>
              </div>
            </div>    
                      </div>
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