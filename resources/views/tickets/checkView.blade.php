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
            <li class="list-group-item clearfix"><a href="#"><i class="fa fa-angle-right"></i> Latest News 1</a></li>
              <li class="list-group-item clearfix"><a href="#"><i class="fa fa-angle-right"></i> Latest News 2</a></li>
              <li class="list-group-item clearfix"><a href="#"><i class="fa fa-angle-right"></i> Latest News 3</a></li>
            </ul>
          </div>
          <!-- END SIDEBAR -->
          <!-- BEGIN CONTENT -->
          <div class="col-md-9 col-sm-7">
          <div class="content-search margin-bottom-20">
              <div class="row">
                <div class="col-md-6">
                  <h1>Check Ticket for <em>times 21</em></h1>
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
              
              <div class="col-md-12 col-sm-6 col-xs-12">
                <div class="product-item">
                  <!-- <div class="pi-img-wrapper">
                    <img src="assets/pages/img/products/model1.jpg" class="img-responsive" alt="Berry Lace Dress">
                  </div> -->
                  <!-- <h3>21</h3> -->
              
                </div>
              </div>
            
              <!-- PRODUCT ITEM END -->
            </div>
            
            <!-- END PRODUCT LIST -->
          </div>
          <!-- END CONTENT -->
        </div>
        <!-- END SIDEBAR & CONTENT -->
      </div>
    </div>

    <script type="text/javascript" language="javascript" class="init">
      function buyticket(value) {
        const id = value;
        swal({
            title: "Confirmation!",
            text: "Are you sure to buy",
            textColor: "red",
            buttons: [true, "Buy!"],
            icon: "warning",
        }).then((value) => {
            if (value) {
                $.ajax({
                    method: "get",
                    url: `/buyticket/${id}`
                }).done(function (response) {
                  console.log(response);
                    if (response['response_code'] == "200") {
                      const ticket_name = response['ticket_name'];
                      swal({
                        title: `You Buyed ${ticket_name}`,
                      });
                      window.location.href = `/searchView`;
                    }else if (response['response_code'] == "400")  {
                      
                      swal({
                        title: "This Ticket is owned by other right now",
                      });
                    } else {
                      swal({
                        title: "Something Error",
                      });
                    };
                })
              }
            })
      }
    </script>


@endsection