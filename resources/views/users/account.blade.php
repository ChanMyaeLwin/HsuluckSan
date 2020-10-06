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
          <h1>My Account</h1>
          
          <div class="faq-page">
            <div class="panel panel-default">
                <div class="panel-heading">
                  <h4 class="panel-title">
                      <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion1" href="#accordion1_1">
                      Profile
                      </a>
                  </h4>
                </div>
                <div id="accordion1_1" class="panel-collapse collapse  in">
                  <div class="goods-data compare-goods clearfix">                
                      <table summary="Product Details">
                        <tr>
                          <td class="compare-info">
                            Name
                          </td>
                          <td class="compare-info">
                            {{$user->name}}
                          </td>
                        </tr>
                        <tr>
                          <td class="compare-info">
                            Email
                          </td>
                          <td class="compare-info">
                          {{$user->email}}
                          </td>
                        </tr>
                        <tr>
                          <td class="compare-info">
                            Phone No
                          </td>
                          <td class="compare-info">
                          {{$user->phone}}
                          </td>
                        </tr>
                      </table>
                     
                  </div>
                </div>
                <div class="panel-heading">
                  <h4 class="panel-title">
                      <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2" href="#accordion1_2">
                      Change Password
                      </a>
                  </h4>
                </div>
                <div id="accordion1_2" class="panel-collapse collapse  in">
                  <form role="form" class="form-horizontal form-without-legend">
                    <div class="form-group">
                      <label class="col-lg-2 control-label" for="first-name">Old Password <span class="require">*</span></label>
                      <div class="col-lg-8">
                        <input type="password" id="first-name" class="form-control">
                      </div>
                    </div>
                    <div class="form-group">
                      <label class="col-lg-2 control-label" for="last-name">New Password<span class="require">*</span></label>
                      <div class="col-lg-8">
                        <input type="password" id="first-name" class="form-control">
                      </div>
                    </div>
                   
                    <div class="row">
                      <div class="col-lg-8 col-md-offset-2 padding-left-0 padding-top-20">
                        <button class="btn btn-primary" type="submit">Change Password</button>
                      </div>
                    </div>
                  </form>
                </div>
                <div class="panel-heading">
                  <h4 class="panel-title">
                      <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion3" href="#accordion1_3">
                      My Tickets
                      </a>
                  </h4>
                </div>
                <div id="accordion1_3" class="panel-collapse collapse  in">
                  <div class="goods-data compare-goods clearfix">           
                      <table summary="Product Details">
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
      <!-- END CONTENT -->
    </div>
    <!-- END SIDEBAR & CONTENT -->
  </div>
</div>
      

@endsection