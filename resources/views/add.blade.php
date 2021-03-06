
@extends('admin.layout.master')
@section("title","Add Franchise")

@section('content')

<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="no-js" lang="en">
<!--<![endif]-->


<body>

    @if(session('good'))
        <p class="alert alert-success">
            {{session('good')}}
        </p>
        @endif
    <!-- Left Panel -->

    
    <!-- Left Panel -->

    <!-- Right Panel -->

    <div id="right-panel" class="right-panel">

        <!-- Header-->
        
        <!-- Header-->

        <!--  -->

        <div class="content mt-3">
            <div class="animated fadeIn">


                <div class="row">
                    <div class="col-lg-12">
                         <!-- .card -->
                         <!-- <h1 style="font-weight: bold;">Add Franchise Data</h1> -->
                         <span class="badge badge-pill badge-info" style="width: 100%;"><h2 style="font-weight: bold;">Add Franchise Data</h2></span>

                    </div>
                    <!--/.col-->

                    <div class="col-lg-12">
                       <!--  <div class="card"> -->
  <form action="{{url('/curd')}}" method="post" enctype="multipart/form-data">
  {{csrf_field()}} 

<div class="card-body card-block">
    <div class="col-12">
        <div class="form-group">
            <label class=" form-control-label">Franchise Name</label>
            <input type="text" name="franchise_name" placeholder="Enter Franchise name" class="form-control">
        </div>
    </div>


    <div class="col-12">
        <div class="form-group">
            <label class=" form-control-label">Franchise Code</label>
            <input type="text" name="franchise_code" placeholder="Enter Franchise code" class="form-control">
        </div>
    </div>


    <div class="col-12">
        <div class="form-group">
            <label class=" form-control-label">Franchise Password</label>
            <input type="password" name="franchise_password" placeholder="Enter Franchise Password" class="form-control">
        </div>
    </div>


    <div class="col-12">
        <div class="form-group">
            <label class=" form-control-label">Franchise Email</label>
            <input type="email" name="franchise_email" placeholder="Enter Franchise Email" class="form-control">
        </div>
    </div>

    <div class="col-12">
        <div class="form-group">
            <label class=" form-control-label">Contact Person Name</label>
            <input type="text" name="contact_name" placeholder="Enter Contact Person Name" class="form-control">
        </div>
    </div>

    <div class="col-12">
        <div class="form-group">
            <label class=" form-control-label">Contact Person number</label>
            <input type="number" name="contact_number" placeholder="Enter Contact Number" class="form-control">
        </div>
    </div>


    <div class="col-12">
        <div class="form-group">
            <label for="vat" class=" form-control-label">Address</label>
            <input type="text" name="address" placeholder="Enter Address" class="form-control">
        </div>
    </div>

    <div class="col-12">
        <div class="form-group">
            <label for="vat" class=" form-control-label">Account Number</label>
            <input type="text" name="account_number" placeholder="Enter Account Number" class="form-control">
        </div>
    </div>

    <div class="col-12">
        <div class="form-group">
            <label for="vat" class=" form-control-label">IFSC Code</label>
            <input type="text" name="ifsc_code" placeholder="Enter IFSC Code" class="form-control">
        </div>
    </div>

    <div class="col-12">
        <div class="form-group">
            <label for="vat" class=" form-control-label">Bank Account Holder</label>
            <input type="text" name="account_holder" placeholder="Enter Account Holder Name" class="form-control">
        </div>
    </div>

    <div class="col-12">
        <div class="form-group">
            <label for="vat" class=" form-control-label">Bank Name</label>
            <input type="text" name="bank_name" placeholder="Enter Bank Name" class="form-control">
        </div>
    </div>

    <div class="col-12">
        <div class="form-group">
           <button type="submit" name="submit" class="btn btn-primary">Submit</button> 
        </div>
    </div>
               
                
                </div>
            </div>
        </div>
    </div>
</body>
</html>

@endsection
