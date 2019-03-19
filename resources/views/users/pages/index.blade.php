<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang=""> <!--<![endif]-->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>MyCar</title>
    <meta name="description" content="mycar">
    <meta name="viewport" content="width=device-width, initial-scale=1">

     @include('users.partials.style')
</head>
@extends('users.layout.master')

@section('content')

       <div class="col-lg-4 col-md-6">
                        <div class="card">
                            <a href="#">
                            <div class="card-body">
                                 
                                <div class="stat-widget-five">
                                    <div class="stat-icon dib flat-color-1">
                                        <i class="pe-7s-car"></i>
                                    </div>
                                    <div class="stat-content">
                                        <div class="text-left dib">
                                            <div class="stat-text">
                                               Dhaka Metro 457854 <br> 
                                                
                                                <!-- <span class="count"></span> -->
                                                </div>
                                            <div class="stat-heading"> Brand</div>
                                        </div>
                                    </div>
                                </div>
                                 
                            </div>
                        </a>
                        </div>
                    </div>



@endsection