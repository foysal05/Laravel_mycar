<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang=""> <!--<![endif]-->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>MyCar | Cars</title>
    <meta name="description" content="mycar">
    <meta name="viewport" content="width=device-width, initial-scale=1">

     @include('users.partials.style')
</head>
@extends('users.layout.master')

@section('content')
 <div class="animated fadeIn">
            <div class="row">

                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <strong class="card-title">গাড়ির তথ্য সমুহ</strong>
                        <a href="{{ route('new_car')}}"><button  class="btn btn-success"><i class="menu-icon ti-plus"></i> নতুন গাড়ি যুক্ত করুন</button></a>
                        </div>
                        <div class="card-body">
                            @include('users.partials.messages')
                            <table id="bootstrap-data-table" class="table table-striped table-bordered">
                                <thead>
                                    <tr>
                                        <th>গাড়ির নম্বর</th>
                                        <th>ব্রান্ড</th>
                                        <th>মডেল</th>
                                        <th>চেসিস নং</th>
                                        <th>ড্রাইভার</th>
                                        <th>অবস্থা</th>
                                        <th>পরিবর্তন</th>
                                    </tr>
                                </thead>
                                <tbody>
                  @foreach ($cars as $car)
                      
                  
                                           <tr>
                                           <td>{{$car->number}}</td>
                                            <td>{{$car->brand}}</td>
                                            <td>{{$car->model}}</td>
                                            <td>{{$car->chassis_no}}</td>
                                            <td>{{$car->driver}}</td>
                                            <td>{{$car->status}}</td>
                                            <td style='text-align: center'>
                                            <a style='color:white; text-decoration: none;' href='{{route('car.edit', $car->id)}}'><button class='btn btn-info'><i class='fas fa-edit'></i></button></a>

                  {{-- <a style='color:white; text-decoration: none;' onClick=\"return confirm('আপনি মুছে ফেলার জন্য নিশ্চিত?')\" href='#'><button class='btn btn-danger'>
                  <i class='far fa-trash-alt'></i></button></a> --}}
                  <a  href='#deleateModal{{ $car->id}}' data-toggle="modal"><button class='btn btn-danger'>
                  <i class='far fa-trash-alt'></i></button></a>
                  

                  {{-- Delete Modal --}}
                                 
                                        <div class="modal fade" id="deleateModal{{ $car->id}}" role="dialog">
                                            <div class="modal-dialog">
                                            
                                            <!-- Modal content-->
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                <button type="button" class="close" data-dismiss="modal">&times;</button>
                                                <h4 class="modal-title">Are You Sure To Delete?</h4>
                                                </div>
                                            <div class="modal-body">
                          <form action="{!! route('car.delete', $car->id) !!}"  method="post">
                            {{ csrf_field() }}
                            <button type="submit" class="btn btn-danger">Permanent Delete</button>
                          </form>

                        </div>
                                                <div class="modal-footer">
                                                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                                </div>
                                            </div>
                                            
                                            </div>
                                        </div>
                  </td>
                                            

                                            
                                        </tr>
                               @endforeach                                
                                
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>


        </div>
    </div><!-- .animated -->




@endsection