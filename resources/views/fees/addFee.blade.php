
@extends('admin.layout.master')
@section("title","Add fees")

@section('content')

<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<br><br>

        
    @if(session('submit'))
        <p class="alert alert-success">
            <i class="fa fa-check-circle"></i> {{session('submit')}}
        </p>
        @endif

	<span class="badge badge-pill badge-info" style="width: 100%;"><h2 style="font-weight: bold;">AddFees</h2></span>
    <br><br><br>

    @php if(!empty($data->image))
    {@endphp

    	<center><img src="{{url('../../upload/' .$data->image)}}" style="height: 100px;width: 100px;border-radius: 100%;"></center>
    	@php
    }else
    {
    	@endphp
    	<!-- <p>image not found</p> -->
    	@php

    }@endphp

    <br>

    <form action="/storedata" method="post" enctype="multipart/form-data">
    	@csrf



    	<div class="box-body" >
    		<div class="table table-bordered">

    			<table style="width: 100%;">
    		<tr>
    			<td>Registration Number</td>
    			<td>{{$data->regno}}</td>
    		</tr>

    		<tr>

    			<td>Student name</td>
    			<td>{{$data->student_name}}</td>

    		</tr>

    		<tr>
    			<td>Course Fee</td>
    			<td>{{$data->course_fee}}</td>
    		</tr>

            <tr>
                <td>Submitted Fees</td>
                <td>{{$data->submitted_fee}}</td>
            </tr>

    		<tr>
    			<td>Remaining Fee</td>
    			<td>{{$data->course_fee-$data->submitted_fee}}</td>
    		</tr>
    	</table>

    	<br>
    	<input type="hidden" name="regno" value="{{$data->regno}}">
    	<input type="hidden" name="franchise_name" value="{{$data->franchise_name}}">
    	<input type="hidden" name="course_fee" value="{{$data->course_fee}}">
    	<br>

    	<div class="col-12">
        <div class="form-group">
            <label class=" form-control-label">Add Fees</label>
            <input type="integer" name="submitted_fee" placeholder="Enter Fees" class="form-control">
        </div>
    </div>

    <div class="col-12">
        <div class="form-group">
            <label class=" form-control-label">Remark</label>
            <input type="text" name="payment_remark" placeholder="Enter Remark" class="form-control">
        </div>
    </div>

    <div class="col-12">
        <div class="form-group">
        	 <label class=" form-control-label">Payment Method</label><br>
        	<select name="payment_method">
           
            <option>select</option>
            <option value="cash">Cash</option>
            <option value="paytm">Paytm</option>
        </select>
        </div>
    </div>

    <div class="col-12">
        <div class="form-group">
           <button type="submit" name="submit" class="btn btn-primary">Submit</button> 
        </div>
    </div>
    			
    		</div>
    	</div>
    	
    </form>


	

</body>
</html>
@endsection