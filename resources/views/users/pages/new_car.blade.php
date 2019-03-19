    <!doctype html>
    <!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
    <!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
    <!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
    <!--[if gt IE 8]><!--> <html class="no-js" lang=""> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>MyCar | Car</title>
        <meta name="description" content="mycar">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        @include('users.partials.style')
    </head>
    @extends('users.layout.master')

    @section('content')
    <div class="row">
            <div class="col-lg-8">
                <div class="card">
                    <div class="card-header">
                        <strong class="card-title">গাড়ির তথ্য</strong>
                    </div>
                    <div class="card-body">
                        <!-- Credit Card -->
                        <div id="pay-invoice">
                            <div class="card-body">
                                <div class="card-title">
                                <h3 class="text-center">গাড়ির  তথ্য যুক্ত করুন
                                </h3>
                            </div>
                            <hr>
                            @include('users.partials.messages')
@if (@isset ($car->number))
    <form action="{{route('car.update',$car->id)}}" method="post" accept-charset="utf-8" >
   
        
    @else
      <form action="{{route('cars.store')}}" method="post" accept-charset="utf-8" >
    
@endif
                        
                                             {{ csrf_field() }}
                                                <div class="form-group">
                                                    <label for="cc-payment" class="control-label mb-1">গাড়ির নম্বর
                                                    </label>
    <input id="cc-payment"  value="{{$car->number or ''}}"  name="car_number" type="text"  class="form-control" aria-required="true" aria-invalid="false" required="" >
                                                </div>
                                                <div class="form-group">
                                                    <label for="cc-payment" class="control-label mb-1">ব্রান্ড
                                                    </label>
     <input value="{{$car->brand or ''}}"  id="cc-payment"  name="brand" type="text"  class="form-control" aria-required="true" aria-invalid="false" required="" >
                                                </div>
                                                <div class="form-group has-success">
                                                    <label for="cc-name" class="control-label mb-1">মডেল </label>
      <input id="cc-name" name="model" type="text" class="form-control" value="{{$car->model or ''}}"  data-val="true" data-val-required="Please enter the name of location" autocomplete="cc-name" aria-required="true" aria-invalid="false" aria-describedby="cc-name" required="">
                                                    <span class="help-block field-validation-valid" data-valmsg-for="cc-name" data-valmsg-replace="true"></span>
                                                </div>
                                                <div class="form-group">
                                                    <label for="cc-number" class="control-label mb-1">চেসিস নং</label>
       <input id="cc-number" value="{{$car->chassis_no or ''}}"  name="chassis" type="text" class="form-control" required="" >
                                                    <span class="help-block" data-valmsg-for="cc-number" data-valmsg-replace="true"></span>
                                                </div>
                                                <div class="form-group">
                                                    <label for="cc-number" class="control-label mb-1">ড্রাইভার</label>
                                                    <select id="cc-number" name="driver" class="form-control" required="">
                                                        <option value="">নির্বাচন করন</option>
                                                        <option value="1" {{ $car->driver  ==1? 'selected="selected"' : '' }} >ইমরান</option>
                                                        <option value="2" {{ $car->driver  ==2? 'selected="selected"' : '' }}>সামির</option>
                                                  
                                                    </select>
                                                    
                                                    <span class="help-block" data-valmsg-for="cc-number" data-valmsg-replace="true"></span>
                                                </div>
                                                <div class="form-group">
                                                    <label for="cc-number" class="control-label mb-1">অবস্থা</label>
                                                    <select class="form-control" name="status" required="">
                                                    <option value="" >নির্বাচন করন</option>
                                                    <option value="1" {{ $car->status  == 1? 'selected="selected"' : '' }} >অ্যাক্টিভ</option>
                                                    <option value="0" {{ $car->status  == 0? 'selected="selected"' : '' }}>নিষ্ক্রিয়</option>
                                                    </select>
                                                    <span class="help-block" data-valmsg-for="cc-number" data-valmsg-replace="true"></span>
                                                </div>

                                                <div>
                                                    <button id="payment-button" name="save" type="submit" class="btn btn-lg btn-info btn-block">
@if (@isset ($car->number))
      <span id="payment-button-amount">Update</span>
@else
     <span id="payment-button-amount">Save</span>
@endif
                                                       
                                                        <span id="payment-button-sending" style="display:none;">Sending…</span>
                                                    </button>
                                                </div>
                                            </form>
                                        </div>
                                    </div>

                                </div>
                            </div> <!-- .card -->

                        </div><!--/.col-->

                    </div>




    @endsection