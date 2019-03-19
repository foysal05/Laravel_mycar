<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang=""> <!--<![endif]-->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>MyCar | Earn</title>
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
                    <strong class="card-title">ড্রাইভার তথ্য</strong>
                    
                </div>
                <div></div>
                <div class="card-body">
                    <!-- Credit Card -->
                    <div id="pay-invoice">
                        <div class="card-body">
                            <div class="card-title">
                               <h3 class="text-center">ড্রাইভার এর  তথ্য যুক্ত করুন
                               </h3>
                           </div>
                           <hr>
                           <form action="db/db_driver.php" method="post" enctype="multipart/form-data" accept-charset="utf-8" >
        <!-- <div class="form-group text-center">
            <ul class="list-inline">
                <li class="list-inline-item"><i class="text-muted fa fa-cc-visa fa-2x"></i></li>
                <li class="list-inline-item"><i class="fa fa-cc-mastercard fa-2x"></i></li>
                <li class="list-inline-item"><i class="fa fa-cc-amex fa-2x"></i></li>
                <li class="list-inline-item"><i class="fa fa-cc-discover fa-2x"></i></li>
            </ul>
        </div> -->
        <div class="form-group">
         <span style="color: red">*</span> <label for="cc-payment" class="control-label mb-1">নাম
         </label>
         <input id="cc-payment" value=""  name="name" type="text"  class="form-control" aria-required="true" aria-invalid="false" required="" >
     </div>
     <div class="form-group">
         <span style="color: red">*</span> <label for="cc-payment" class="control-label mb-1">ঠিকানা
         </label>
         <input id="cc-payment" value=""  name="address" type="text"  class="form-control" aria-required="true" aria-invalid="false" required="" >
     </div>
     <div class="form-group has-success">
        <span style="color: red">*</span><label for="cc-name" class="control-label mb-1">এন আইডি </label>
        <input id="cc-name" value="" onkeypress="return isNumberKey(event)" name="nid" type="text" class="form-control" data-val="true" data-val-required="Please enter the name of location" autocomplete="cc-name" aria-required="true" aria-invalid="false" aria-describedby="cc-name" required="">
        <span class="help-block field-validation-valid" data-valmsg-for="cc-name" data-valmsg-replace="true"></span>
    </div> 
    <div class="form-group has-success">
     <span style="color: red">*</span> <label for="cc-name" class="control-label mb-1">এন আইডি ফটো </label>
     <input id="cc-name" name="nid_photo" type="file" accept=".png,.jpeg,.jpg" class="form-control" data-val="true" data-val-required="Please enter the name of location" autocomplete="cc-name" aria-required="true" aria-invalid="false" aria-describedby="cc-name" required="">
     <span class="help-block field-validation-valid" data-valmsg-for="cc-name" data-valmsg-replace="true"></span>
 </div>
 <div class="form-group">
     <span style="color: red">*</span> <label for="cc-number" class="control-label mb-1">ফোন</label>
     <input id="cc-number" value="" onkeypress="return isNumberKey(event)" name="phone" type="text" class="form-control" required="" >
     <span class="help-block" data-valmsg-for="cc-number" data-valmsg-replace="true"></span>
 </div>
 <div class="form-group">
    <span style="color: red">*</span><label for="cc-number" class="control-label mb-1">লাইসেন্স</label>
    <input id="cc-number" value="" name="licence" accept=".png,.jpeg,.jpg" type="file" class="form-control" required="" >
    <span class="help-block" data-valmsg-for="cc-number" data-valmsg-replace="true"></span>
</div>
<div class="form-group">
    <span style="color: red">*</span><label for="cc-number" class="control-label mb-1">বেতন</label>
    <input id="cc-number" value="" name="salary" onkeypress="return isNumberKey(event)" type="text" class="form-control" required="" >
    <span class="help-block" data-valmsg-for="cc-number" data-valmsg-replace="true"></span>
</div>
<div class="form-group">
    <label for="cc-number" class="control-label mb-1">কমিশন (%)</label>
    <input id="cc-number" value="" name="commission" onkeypress="return isNumberKey(event)" type="text" class="form-control" placeholder="প্রতি যাত্রা এর কমিশন "  >
    <span class="help-block" data-valmsg-for="cc-number"   data-valmsg-replace="true"></span>
</div>
        <!-- <div class="form-group">
            <label for="cc-number" class="control-label mb-1">অবস্থা</label>
            <select class="form-control" name="status" required="">
                <option value="">নির্বাচন করন</option>
                <option value="অ্যাক্টিভ">অ্যাক্টিভ</option>
                <option value="নিষ্ক্রিয়">নিষ্ক্রিয়</option>
            </select>
            <span class="help-block" data-valmsg-for="cc-number" data-valmsg-replace="true"></span>
        </div> -->



        {{-- <div>
            <button id="payment-button" name="update_driver" type="submit" class="btn btn-lg btn-info btn-block">

                <span id="payment-button-amount">Update</span>
                <span id="payment-button-sending" style="display:none;">Sending…</span>
            </button>
        </div>  --}}

        <div>
            <button id="payment-button" name="add_driver" type="submit" class="btn btn-lg btn-info btn-block">

                <span id="payment-button-amount">Save</span>
                <span id="payment-button-sending" style="display:none;">Sending…</span>
            </button>
        </div>

    </form>
</div>
</div>

</div>
</div> <!-- .card -->

</div><!--/.col-->
<div class="col-lg-12">
    <div class="card">
        <div class="card-header">
            <strong class="card-title">ড্রাইভার তালিকা </strong>
        </div>
        <div class="card-body">
            <!-- Credit Card -->
            <div id="pay-invoice">
                <div class="card-body">
                    <!-- <div class="card-title">
                        <h3 class="text-center">টাকা খরচ তালিকা </h3>
                    </div> -->
                    <hr>
                   <table id="example" class="display" style="width:100%">
        <thead>
            <tr>
                <th>Name</th>
                <th>Position</th>
                <th>Office</th>
                <th>Age</th>
                <th>Start date</th>
                <th>Salary</th>
            </tr>
        </thead>
        <tbody>
           

            
            <tr>
                <td>Quinn Flynn</td>
                <td>Support Lead</td>
                <td>Edinburgh</td>
                <td>22</td>
                <td>2013/03/03</td>
                <td>$342,000</td>
            </tr>
            <tr>
                <td>Charde Marshall</td>
                <td>Regional Director</td>
                <td>San Francisco</td>
                <td>36</td>
                <td>2008/10/16</td>
                <td>$470,600</td>
            </tr>
            <tr>
                <td>Haley Kennedy</td>
                <td>Senior Marketing Designer</td>
                <td>London</td>
                <td>43</td>
                <td>2012/12/18</td>
                <td>$313,500</td>
            </tr>
            <tr>
                <td>Tatyana Fitzpatrick</td>
                <td>Regional Director</td>
                <td>London</td>
                <td>19</td>
                <td>2010/03/17</td>
                <td>$385,750</td>
            </tr>
            <tr>
                <td>Michael Silva</td>
                <td>Marketing Designer</td>
                <td>London</td>
                <td>66</td>
                <td>2012/11/27</td>
                <td>$198,500</td>
            </tr>
            <tr>
                <td>Paul Byrd</td>
                <td>Chief Financial Officer (CFO)</td>
                <td>New York</td>
                <td>64</td>
                <td>2010/06/09</td>
                <td>$725,000</td>
            </tr>
            <tr>
                <td>Gloria Little</td>
                <td>Systems Administrator</td>
                <td>New York</td>
                <td>59</td>
                <td>2009/04/10</td>
                <td>$237,500</td>
            </tr>
            <tr>
                <td>Bradley Greer</td>
                <td>Software Engineer</td>
                <td>London</td>
                <td>41</td>
                <td>2012/10/13</td>
                <td>$132,000</td>
            </tr>
            <tr>
                <td>Dai Rios</td>
                <td>Personnel Lead</td>
                <td>Edinburgh</td>
                <td>35</td>
                <td>2012/09/26</td>
                <td>$217,500</td>
            </tr>
            <tr>
                <td>Jenette Caldwell</td>
                <td>Development Lead</td>
                <td>New York</td>
                <td>30</td>
                <td>2011/09/03</td>
                <td>$345,000</td>
            </tr>
            <tr>
                <td>Yuri Berry</td>
                <td>Chief Marketing Officer (CMO)</td>
                <td>New York</td>
                <td>40</td>
                <td>2009/06/25</td>
                <td>$675,000</td>
            </tr>
            <tr>
                <td>Caesar Vance</td>
                <td>Pre-Sales Support</td>
                <td>New York</td>
                <td>21</td>
                <td>2011/12/12</td>
                <td>$106,450</td>
            </tr>
            <tr>
                <td>Doris Wilder</td>
                <td>Sales Assistant</td>
                <td>Sidney</td>
                <td>23</td>
                <td>2010/09/20</td>
                <td>$85,600</td>
            </tr>
            <tr>
                <td>Angelica Ramos</td>
                <td>Chief Executive Officer (CEO)</td>
                <td>London</td>
                <td>47</td>
                <td>2009/10/09</td>
                <td>$1,200,000</td>
            </tr>
            <tr>
                <td>Gavin Joyce</td>
                <td>Developer</td>
                <td>Edinburgh</td>
                <td>42</td>
                <td>2010/12/22</td>
                <td>$92,575</td>
            </tr>
            <tr>
                <td>Jennifer Chang</td>
                <td>Regional Director</td>
                <td>Singapore</td>
                <td>28</td>
                <td>2010/11/14</td>
                <td>$357,650</td>
            </tr>
            <tr>
                <td>Brenden Wagner</td>
                <td>Software Engineer</td>
                <td>San Francisco</td>
                <td>28</td>
                <td>2011/06/07</td>
                <td>$206,850</td>
            </tr>
            <tr>
                <td>Fiona Green</td>
                <td>Chief Operating Officer (COO)</td>
                <td>San Francisco</td>
                <td>48</td>
                <td>2010/03/11</td>
                <td>$850,000</td>
            </tr>
            <tr>
                <td>Shou Itou</td>
                <td>Regional Marketing</td>
                <td>Tokyo</td>
                <td>20</td>
                <td>2011/08/14</td>
                <td>$163,000</td>
            </tr>
               </tbody>
        <tfoot>
            <tr>
                <th>Name</th>
                <th>Position</th>
                <th>Office</th>
                <th>Age</th>
                <th>Start date</th>
                <th>Salary</th>
            </tr>
        </tfoot>
    </table>
        </div>
    </div>

</div>
</div> <!-- .card -->

</div><!--/.col-->
</div>


@endsection


