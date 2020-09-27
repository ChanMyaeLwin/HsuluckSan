@extends('layouts.master')

@section('content')
             <div class="page-content-product">
         <div class="main-product">
            <div class="container">
               <div class="row clearfix">
                  <div class="find-box">
                     <div class="product-sh">
                     {!! Form::open(array('route' => 'tickets.search','method'=>'GET')) !!}
                        <div class="col-sm-9">
                           <div class="form-sh">
                              <input name="ticket_no" type="text" placeholder="" value="{{ $ticket_no }}">
                           </div>
                        </div>
                        
                        <div class="col-sm-3">
                         <div class="form-sh"><button type='submit' class='btn'>ရှာပါ</button> </div>
                        </div>
                        {!! Form::close() !!}
                        <p>အခြားပုံစံများဖြင့် လက်မှတ်ဝယ်ရန် <a href="#">နှိပ်ပါ</a></p>
                     </div>
                  </div>
               </div>
               <div class="row clearfix">
                  @if($tickets)
                  @foreach ($tickets as $key => $ticket)
                  <div class="col-lg-3 col-sm-6 col-md-3">

                     <a href="#">
                        <div class="box-img">
                           <img src="{{ asset('img/logo.png') }}" class="icon-small" alt="">
                           <h4>{{ $ticket->name }}</h4>
                           <!-- <p>By <span>{{ $ticket->owner }}</span></p> -->
                           <img src="images/product/1.png" alt="" />
                           @if ($ticket->status == 1)
                              <a href="{{ route('tickets.buy',$ticket->id) }}" style="background-color:#45c216; color:#fff"><i class="fa fa-shopping-cart"></i> Buy </a>
                              @else
                              <a href="#" style="background-color:#bf161d; color:#fff">Not Availabel</a>
                              @endif
                        </div>
                     </a>
                  </div>
                  @endforeach 
                  
               </div> 
             
              
                  <div class="categories_link">
                  {{ $tickets->links() }}
                  </div>
                  @else
                  <div class="fill">
                     <h4>There is not result with same keyword</h4>
                  </div>
                  @endif
               </div>
            </div>
         </div>
      </div>
      
      

@endsection