<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang=""> <!--<![endif]-->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>MyCar | Report</title>
    <meta name="description" content="mycar">
    <meta name="viewport" content="width=device-width, initial-scale=1">

     @include('users.partials.style')
</head>
@extends('users.layout.master')

@section('content')

        <div class="row">

            <div class="col-lg-12">
                <div class="card">
                    <div class="card-header">
                        <strong class="card-title">আয়ের তথ্য দেখুন</strong>
                    </div>
                    <div class="card-body">
                        <!-- Credit Card -->
                        <div id="pay-invoice">
                            <div class="card-body">
                                <div class="card-title">
                                    <h3 class="text-center">মাসিক আয় বিবরণী </h3>

                                 <!--    <div class="form-group">
                                        <label for="cc-payment" class="control-label mb-1">তারিখ :
                                        </label>
                                        <input id="cc-payment"  name="amount" type="text" placeholder="ক্লিক করুন" readonly="" class="form-control" aria-required="true" aria-invalid="false" required="" >
                                    </div> -->
                                    <div class="form-group data-custon-pick data-custom-mg" id="data_5">
                                        <label>তারিখ নির্বাচন করুন</label>
                                        <form action="" method="post">
                                            <div class="input-daterange input-group" id="datepicker">
                                                <input type="text" class="form-control" readonly="" required="" id="start" name="start" value="<?php echo date('Y-m-d');?>" />
                                                <span class="input-group-addon">থেকে</span>
                                                <input type="text" class="form-control" readonly="" required="" id="end" name="end" value="<?php echo date('Y-m-d');?>" />
                                            </div>
                                            <br>
                                            <div class="input-daterange input-group" id="datepicker">

                                                <select name="car" id="car" required="" onChange="myNewFunction(this);" class="form-control">
                                                    <option value="">আপনার গাড়ী নির্বাচন করুন</option>
                                                    <?php
                                                   // include('db/db.php');
//                                                     $query="SELECT * FROM cars WHERE owner_id='".$_SESSION['u_id']."'";

//                                                     $result=mysqli_query($con,$query);
// //echo mysqli_error();
//                                                     if(mysqli_num_rows($result)>0){

//                                                         while($row=mysqli_fetch_array($result, MYSQLI_ASSOC)){
//                                                             echo "<option value='".$row['c_id']."'>".$row['number']."</option>";


//                                                         }
//                                                     }


                                                    ?>
                                                </select>
                                            </div>
                                            <br>
                                            <div class="input-daterange input-group" id="datepicker">

                                                <input type="submit" class="btn btn-success btn-block" value="আয়ের রিপোর্ট দেখুন" name="get_report">
                                            </div>
                                        </form>
                                    </div>
                                </div>
                                <hr>
                                <?php
//                                 if (isset($_POST['get_report'])) {

//                                     $_SESSION['earn_start']=$_POST['start'];
//                                     $_SESSION['earn_end']=$_POST['end'];
//                                     $car=$_POST['car'];
//                                     $query="SELECT salary FROM driver,cars WHERE cars.driver=driver.d_id AND c_id='$car'";
//                                     $driver_salary=0;
//                                     $result=mysqli_query($con,$query);
//                                     $car_number="";

//                                     if(mysqli_num_rows($result)>0){

//                                         while($row=mysqli_fetch_array($result, MYSQLI_ASSOC
//                                         )){

//                                             $driver_salary=$row['salary'];
// //echo $driver_salary;
//                                         }
//                                     }

//                                     $sql="SELECT * FROM cars WHERE c_id='".$_POST['car']. "' ";
//                                     $selected_car="";
//                                      $query_result=mysqli_query($con,$sql);
//                                     if(mysqli_num_rows($query_result)>0){

//                                         while($row=mysqli_fetch_array($query_result, MYSQLI_ASSOC
//                                         )){
//                                            $selected_car=$row['number'];

//                                         echo $selected_car;
//                                        }
//                                    }

                                   ?>

                                   <title>
                                     <?php
//                                      if (isset($_SESSION['earn_start'])) {
//                                         echo $_SESSION['earn_start'];
//                                         echo $_SESSION['earn_end'];
//    // echo $_SESSION['earn_start']." থেকে ".$_POST['end']  ;
//                                     }else{
//                                         echo "string";
//                                     }

                                    ?>
                                </title>
                                <h2>মোট আয় :</h2>
                                <table id="earn" class="table table-striped table-bordered">

                                    <thead>
                                        <tr>
                                            <th>তারিখ</th>
                                            <th>যাতায়েত স্থান</th>
                                            <th>টাকা</th>
                                            <!-- <th>পরিবর্তন</th> -->
                                        </tr>
                                    </thead>
                                    <tbody>
                                     <?php
                                    //  include('db/db.php');
                                    //    //  echo $_POST['start'];
                                    //  $query="SELECT * FROM rental WHERE date BETWEEN '".$_POST['start']."' AND '".$_POST['end']."' AND car='$car'";
                                    //   // echo $query;
                                    //  $result=mysqli_query($con,$query);
                                    //  $earn=0;
                                    //  if(mysqli_num_rows($result)>0){

                                    //     while($row=mysqli_fetch_array($result, MYSQLI_ASSOC
                                    //     )){
                                    //         $earn+=$row['amount'];


                                            ?>
                                            <tr>
                                                <td>15-03-2019</td>
                                                <td>N/A</td>
                                                <td>1000</td>
                                                

                                            </tr>
                                            <?php
                                    //     }
                                    // }
                                    ?>
                                    

                                    <tfoot>
                                        <tr>
                                            <th></th>
                                            <th>মোট আয় :</th>
                                            <th><?php //echo $earn;?></th>
                                        </tr>
                                    </tfoot>     
                                </tbody>
                            </table>

                            <h2>মোট খরচ :</h2>
                            <table id="cost" class="table table-striped table-bordered">

                                <thead>
                                    <tr>
                                        <th>তারিখ</th>
                                        <th>খরচের বর্ণনা</th>
                                        <th>টাকা</th>
                                        <!-- <th>পরিবর্তন</th> -->
                                    </tr>
                                </thead>
                                <tbody>
                                 <?php
                                //  include('db/db.php');
                                //        //  echo $_POST['start'];
                                //  $query_cost="SELECT * FROM cost WHERE date BETWEEN '".$_POST['start']."' AND '".$_POST['end']."' AND car='$car'";
                                //   // echo $query_cost;
                                //  $result=mysqli_query($con,$query_cost);
                                //  $cost=0;
                                //  if(mysqli_num_rows($result)>0){

                                //     while($row=mysqli_fetch_array($result, MYSQLI_ASSOC
                                //     )){
                                //         $cost+=$row['amount'];


                                        ?>
                                        <tr>
                                            <td>15-03-2019</td>
                                            <td>N/A</td>
                                            <td>500</td>
                                            

                                        </tr>
                               
                                <tfoot>
                                    <tr>
                                        <th></th>
                                        <th>মোট খরচ :</th>
                                        <th><?php //echo $cost;?></th>
                                    </tr>
                                </tfoot>     
                            </tbody>
                        </table>  

                        <!-- The Modal -->
                        <div class="modal" id="myModal">
                          <div class="modal-dialog">
                            <div class="modal-content">

                              <!-- Modal Header -->
                              <div class="modal-header">
                                <h4 class="modal-title">Modal Heading</h4>
                                <button type="button" class="close" data-dismiss="modal">&times;</button>
                            </div>

                            <!-- Modal body -->
                            <div class="modal-body">
                                <table class="table">
                                    <tr>
                                        <th>রঙ</th>
                                        <th> সঙ্গা</th>
                                    </tr>
                                    <tr>
                                        <td><div style="height: 20px; width: 20px; background-color: #00804F"></div></td>
                                        <td>আপনি লাভ করছেন </td>
                                    </tr>
                                    <tr>
                                        <td><div style="height: 20px; width: 20px; background-color: #FF9800"></div></td>
                                        <td>আপনি ড্রাইবারের বেতেরন সমপরিমাণ টাকাও উপার্জন করতে পারেন নাই</td>
                                    </tr>
                                    <tr>
                                        <td><div style="height: 20px; width: 20px; background-color: #FF1700"></div></td>
                                        <td>আপনি লস করছেন</td>
                                    </tr>
                                    
                                </table>
                            </div>

                            <!-- Modal footer -->
                            <div class="modal-footer">
                                <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                            </div>

                        </div>
                    </div>
                </div>          
                <div class="row">
                    <div style="margin-left: 35%;" class="center-block col-md-4" style="float: none; background-color: grey">

                        <h2>
                          <?php
                    //       $net_income=$earn-$cost;
                    //       if ($net_income>$driver_salary) {
                    //          echo "<h2 style='color:green'>নিট আয় : ".$net_income."/="."</h2>";
                    //      }else if ($net_income<0){
                    //        echo "<h2 style='color:red'>নিট আয় : ".$net_income." ৳/="."</h2>";
                    //    }else{
                    //        echo "<h2 style='color:#FF9800'>নিট আয় : ".$net_income." ৳/="."</h2>";
                    //    }

                       ?>  
                   </h2> 
                   <h4>ড্রাইভার এর বেতন : 8000 /= টাকা</h4>  </div>
                   <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal">
                    রঙ এর সংজ্ঞা
                </button>
            </div>
            <?php
        // }
        ?>
    </div>
</div>

</div>
</div> <!-- .card -->

</div><!--/.col-->
</div>



@endsection
