@extends('admin.layout.master')
@section("title","My Profile")


@section('content')

<!DOCTYPE html>
<html>
<head>
	<title></title>

	<style type="text/css">
		/*td{
			text-align: center;
		}*/
	</style>
</head>
<body>
<br><br>

        
  

	<span class="badge badge-pill badge-info" style="width: 100%;"><h2 style="font-weight: bold;">My Profile</h2></span>
    <br><br><br>

    @php if(!empty($profile->image))
    {@endphp

    	<center><img src="{{url('../../upload/' .$profile->image)}}" style="height: 100px;width: 100px;border-radius: 100%;"></center>
    	@php
    }else
    {
    	@endphp
    	<!-- <p>image not found</p> -->
    	@php

    }@endphp

  	<br>

  	<form>
  		<div class="box-body" >
    		<div class="table table-bordered">
    			<table style="width: 100%;">

    				<tr>
    					<td>Registration Number</td>
    					<td>{{$profile->regno}}</td>
    				</tr>

    				<tr>
    					<td>Name</td>
    					<td>{{$profile->student_name}}</td>
    				</tr>

    				<tr>
    					<td>Father Name</td>
    					<td>{{$profile->father_name}}</td>
    				</tr>

    				<tr>
    					<td>DOB</td>
    					<td>{{$profile->dob}}</td>
    				</tr>

    				<tr>
    					<td>Registration Date</td>
    					<td>{{$profile->registration_date}}</td>
    				</tr>

    				<tr>
    					<td>Course Name</td>
    					<td>{{$profile->course}}</td>
    				</tr>

    				<tr>
    					<td>Branch Name</td>
    					<td>{{$profile->franchise_name}}</td>
    				</tr>

    				<tr>
    					<td>Course Fee</td>
    					<td>{{$profile->course_fee}}</td>
    				</tr>

    				<tr>
    					<td>Submitted Fee</td>
    					<td>{{$profile->submitted_fee}}</td>
    				</tr>

    				<tr>
    					<td>Remaning Fee</td>
    					<td>{{$profile->course_fee-$profile->submitted_fee}}</td>
    				</tr>

    				<tr>
    					<td>Mobile Number</td>
    					<td>{{$profile->contact_number}}</td>
    				</tr>
    				<br>
    				
    				
    				

    			</table>
    		</div>
    	</div>
  	</form>

   

	

</body>
</html>

@endsection