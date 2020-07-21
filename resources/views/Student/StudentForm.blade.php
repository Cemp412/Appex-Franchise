@extends('admin.layout.master')
@section("title","Add Student")

@section('content')

<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="no-js" lang="en">
<!--<![endif]-->


<body>

   <!--  @if(session('message'))
        <p class="alert alert-success">
            <i class="fa fa-check-circle"></i> {{session('message')}}
        </p>
        @endif -->


    


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
                         <span class="badge badge-pill badge-info" style="width: 100%;"><h2 style="font-weight: bold;">Add Student Data</h2></span>

                    </div>
                    <!--/.col-->

                    <div class="col-lg-12">
                       <!--  <div class="card"> -->
  <form action="{{url('/student')}}" method="post" enctype="multipart/form-data">
  {{csrf_field()}}  

<div class="card-body card-block">
    <div class="col-12">
        <div class="form-group">
            <label class=" form-control-label">Student Name</label>
            <input type="text" name="student_name" placeholder="Enter Student name" class="form-control">
        </div>
    </div>


    <div class="col-12">
        <div class="form-group">
            <label class=" form-control-label">Father Name</label>
            <input type="text" name="father_name" placeholder="Enter Father Name" class="form-control">
        </div>
    </div>


    <div class="col-12">
        <div class="form-group">
            <label class=" form-control-label">D.O.B</label><br>
            <input type="date" name="dob">
        </div>
    </div>


    <div class="col-12">
        <div class="form-group">
            <label class=" form-control-label">Course</label>
            <input type="text" name="course" placeholder="Enter Course" class="form-control">
        </div>
    </div>

    <div class="col-12">
        <div class="form-group">
            <label class=" form-control-label">Contact Number</label>
            <input type="text" name="contact_number" placeholder="Enter Contact Number" class="form-control">
        </div>
    </div>

    <div class="col-12">
        <div class="form-group">
            <label class=" form-control-label">Email</label>
            <input type="email" name="student_email" placeholder="Enter Email" class="form-control">
        </div>
    </div>

    <input type="hidden" name="franchise_name" value="{{Auth::user()->name}}">


    <div class="col-12">
        <div class="form-group">
            <label for="vat" class=" form-control-label">Password</label>
            <input type="password" name="student_password" placeholder="Enter Password" class="form-control">
        </div>
    </div>

    <div class="col-12">
        <div class="form-group">
            <label for="vat" class=" form-control-label">Course Fee</label>
            <input type="text" name="course_fee" placeholder="Enter Course Fee" class="form-control">
        </div>
    </div>

    <div class="col-12">
        <div class="form-group">
            <label for="vat" class=" form-control-label">Submitted Fee</label>
            <input type="text" name="submitted_fee" placeholder="Enter Submitted Fee" class="form-control">
        </div>
    </div>

    <div class="col-12">
        <div class="form-group">
            <label for="vat" class=" form-control-label">Payment remark</label>
            <input type="text" name="payment_remark" placeholder="Enter Payment Remark" class="form-control">
        </div>
    </div>

    <div class="col-12">
        <div class="form-group">
            <label for="vat" class=" form-control-label">Payment Method</label>
            <input type="text" name="payment_method" placeholder="Enter Payment Method" class="form-control">
        </div>
    </div>

    <div class="col-12">
        <div class="form-group">
            <label for="vat" class=" form-control-label">Registration Date</label><br>
            <input type="date" name="registration_date">
        </div>
    </div>

    <div class="col-12">
        <div class="form-group">
            <label for="vat" class=" form-control-label">Image</label><br>
            <input type="file" name="image">
        </div>
    </div>

    <div class="col-12">
        <div class="form-group">
           <button type="submit" name="submit" value="submit" class="btn btn-primary" >Submit</button> 
        </div>
    </div>
               
                
                </div>
            </div>
        </div>
    </div>

    <script type="text/javascript">

        // function popUp(submit){
        //     swal("Good job!","Successfully Submitted","success");
        // }

        // function popUp(){

        //     swal("Good job!","Successfully Submitted","success");
        // }
        
    </script>
</body>
</html>



@endsection