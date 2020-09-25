@extends('layouts.master')

@section('content')

      <div class="page-content-product">
         <div class="main-product">
            <div class="container">
               <div class="row clearfix">
                  <div class="find-box">
                     <h1>Find your Lucky Tickets</h1>
                     <div class="product-sh">
                     {!! Form::open(array('route' => 'tickets.search','method'=>'POST')) !!}
                        <div class="col-sm-3">
                           <div class="form-sh">
                              <select class="selectpicker">
                                 <option>က</option>
                                 <option>ခ</option>
                                 <option>ဂ</option>
                                 <option>ဃ</option>
                                 <option>င</option>
                                 <option>စ</option>
                                 <option>ဆ</option>
                                 <option>ဇ</option>
                                 <option>ဈ</option>
                                 <option>ည</option>
                                 <option>ဋ</option>
                                 <option>ဌ</option>
                                 <option>ဍ</option>
                                 <option>ဎ</option>
                                 <option>ဏ</option>
                                 <option>တ</option>
                                 <option>ထ</option>
                                 <option>ဒ</option>
                                 <option>ဓ</option>
                                 <option>န</option>
                                 <option>ပ</option>
                                 <option>ဖ</option>
                                 <option>ဗ</option>
                                 <option>ဘ</option>
                                 <option>မ</option>
                                 <option>ယ</option>
                                 <option>ရ</option>
                                 <option>လ</option>
                                 <option>ဝ</option>
                                 <option>သ</option>
                                 <option>ဟ</option>
                                 <option>ဠ</option>
                                 <option>အ</option>
                              </select>
                           </div>
                        </div>
                        <div class="col-sm-6">
                           <div class="form-sh">
                              <input name="ticket_no" type="text" placeholder="နံပါတ်" >
                           </div>
                        </div>
                        
                        <div class="col-sm-3">
                          
                           <div class="form-sh"><button type='submit' class='btn'>Submit</button> </div>
                        </div>
                        {!! Form::close() !!}
                        <p>Or <a href="#"> click here </a>to search More Methods</p>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
      
      

@endsection