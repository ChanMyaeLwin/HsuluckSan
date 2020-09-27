@extends('layouts.master')

@section('content')

      <div class="page-content-product">
         <div class="main-product">
            <div class="container">
               <div class="row clearfix">
                  <div class="find-box">
                     <h1>ကံကောင်းတဲ့ ထီလက်မှတ်ကို ရှာပါ</h1>
                     <div class="product-sh">
                     {!! Form::open(array('route' => 'tickets.search','method'=>'GET')) !!}
                        <div class="col-sm-9">
                           <div class="form-sh">
                              <input name="ticket_no" type="text" placeholder="နံပါတ်" required>
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
            </div>
         </div>
      </div>
      
      

@endsection