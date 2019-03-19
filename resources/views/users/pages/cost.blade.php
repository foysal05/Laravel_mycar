<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang=""> <!--<![endif]-->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>MyCar | Cost</title>
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
                    <strong class="card-title">নিয়মিত ব্যয় তথ্য সংরক্ষণ করুন</strong>
                </div>
                <div class="card-body">
                    <!-- Credit Card -->
                    <div id="pay-invoice">
                        <div class="card-body">
                            <div class="card-title">
                                <h3 class="text-center">দৈনিক ব্যয় লিখুন
                                </h3>
                            </div>
                            <hr>
                            <form action="db/db_cost.php" method="post" >
                             <input type="hidden" name="car" value="<?php //echo $_SESSION['car'];?>">
                             <input type="hidden" name="id" value=" <?php //if (isset($_GET['update'])) { echo $_GET['id'];} ?>">
                             <div class="form-group">
                                <label for="cc-payment" class="control-label mb-1">টাকা
                                </label>
                                <input id="cc-payment" onkeypress="return isNumberKey(event)" value="<?php if (isset($_GET['update'])) { echo $_GET['amount'];} ?>" name="amount" type="text" placeholder="দয়া করে ইংরেজি লিখুন" class="form-control" aria-required="true" aria-invalid="false" required="" >
                            </div>
                            <div class="form-group has-success">
                                <label for="cc-name" class="control-label mb-1">খরচের বিবরণ লিখুন </label>
                                <input id="cc-name" value="<?php //if (isset($_GET['update'])) { echo $_GET['details'];} ?>" name="details" type="text" class="form-control" data-val="true" data-val-required="Please enter the name of location" autocomplete="cc-name" aria-required="true" aria-invalid="false" aria-describedby="cc-name" required="">
                                <span class="help-block field-validation-valid" data-valmsg-for="cc-name" data-valmsg-replace="true"></span>
                            </div>
                            <div class="form-group">
                                <label for="cc-number" class="control-label mb-1">তারিখ</label>
                                <input id="cc-number"  name="date" type="date" class="form-control" value="<?php if (isset($_GET['update'])) { echo $_GET['date'];} ?>" required="" >
                                <span class="help-block" data-valmsg-for="cc-number" data-valmsg-replace="true"></span>
                            </div>

                            <?php
                            // if (isset($_GET['update'])) {
                               ?>
                               <div>
                                <button id="payment-button" name="update" type="submit" class="btn btn-lg btn-info btn-block">

                                    <span id="payment-button-amount">Update</span>
                                    <span id="payment-button-sending" style="display:none;">Sending…</span>
                                </button>
                            </div>

                            <?php
                        // }else{
                            ?>
                            <div>
                                <button id="payment-button" name="save" type="submit" class="btn btn-lg btn-info btn-block">

                                    <span id="payment-button-amount">Save</span>
                                    <span id="payment-button-sending" style="display:none;">Sending…</span>
                                </button>
                            </div>

                            <?php
                        // }
                        ?>
                    </form>
                </div>
            </div>

        </div>
    </div> <!-- .card -->

</div><!--/.col-->
<div class="col-lg-12">
    <div class="card">
        <div class="card-header">
            <strong class="card-title">ব্যয়  তথ্য দেখুন</strong>
        </div>
        <div class="card-body">
            <!-- Credit Card -->
            <div id="pay-invoice">
                <div class="card-body">
                    <div class="card-title">
                        <h3 class="text-center">টাকা খরচ তালিকা </h3>
                    </div>
                    <hr>
                    <table id="example" class="table table-striped table-bordered">

                        <thead>
                            <tr>
                                <th>তারিখ</th>
                                <th>স্থান</th>
                                <th>টাকা</th>
                                <th>পরিবর্তন</th>
                            </tr>
                        </thead>
                        <tbody>
                           <?php
//                            include('db/db.php');
//                            $query="SELECT * FROM cost WHERE car='".$_SESSION['car']."'";
//                            $result=mysqli_query($con,$query);
// //echo mysqli_error();
//                            if(mysqli_num_rows($result)>0){

//                             while($row=mysqli_fetch_array($result, MYSQLI_ASSOC)){


                               ?>
                               <tr>
                                <td>17-03-2019</td>
                                <td>N/A</td>
                                <td>1700</td>
                                <td style='text-align: center'>
                                <a style='color:white; text-decoration: none;' href='my_cost?update&id=".$row['cost_id']."&date=".$row['date']."&details=".$row['details']."&amount=".$row['amount']."'><button class='btn btn-info'><i class='fas fa-edit'></i></button></a>

                                <a style='color:white; text-decoration: none;' onClick=\"return confirm('আপনি মুছে ফেলার জন্য নিশ্চিত?')\" href='db/db_cost.php?delete&id=".$row['cost_id']."&date=".$row['date']."&details=".$row['details']."&amount=".$row['amount']."'><button class='btn btn-danger'>
                                <i class='fas fa-trash-alt'></i></button></a>
                                </td>
                                <?php
                                // echo "<td style='text-align: center'>
                                // <a style='color:white; text-decoration: none;' href='my_cost?update&id=".$row['cost_id']."&date=".$row['date']."&details=".$row['details']."&amount=".$row['amount']."'><button class='btn btn-info'><i class='fas fa-edit'></i></button></a>

                                // <a style='color:white; text-decoration: none;' onClick=\"return confirm('আপনি মুছে ফেলার জন্য নিশ্চিত?')\" href='db/db_cost.php?delete&id=".$row['cost_id']."&date=".$row['date']."&details=".$row['details']."&amount=".$row['amount']."'><button class='btn btn-danger'>
                                // <i class='fa fa-trash-alt'></i></button></a>
                                // </td>";
                                
                                ?>
                                
                            </tr>
                            <?php
                    //     }
                    // }
                    ?>
                    <tfoot>
                        <tr>
                            <th>তারিখ</th>
                            <th>স্থান</th>
                            <th>টাকা</th>
                            <th>পরিবর্তন</th>
                        </tr>
                    </tfoot>     
                </tbody>
            </table>
        </div>
    </div>

</div>
</div> <!-- .card -->

</div><!--/.col-->
</div>




@endsection