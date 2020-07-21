
@extends('admin.layout.master')
@section("title","View Student")
@section('content')


<!DOCTYPE html>
	<html>
	<head>
		<title></title>
		<style>
			label{
				font-weight: bold;
				margin: 0;
    			padding: 0.2em;
			}
			a{
				text-decoration: none;
				color: white;
			}
		</style>
	</head>
	<body>
    <br>
    <br>
    
    <span class="badge badge-pill badge-info" style="width: 100%;"><h2 style="font-weight: bold;">View Student</h2></span>
    <br><br>
    <a href="{{url('viewStudent')}}"><button type="button" class="btn btn-danger" style="float: right;margin-right: 89px;
    margin-bottom: 11px;"><i class="fa fa-backward"></i> Back</button></a>


		<table class="table">
  <thead>
    <tr>
      <th>Sr.no</th>
      <th>Image</th>
      <th>Student Name</th>
      <th>Father Name</th>
      <th>D.O.B</th>
      <th>Course</th>

      <th>Contact Number</th>
      <th>Email</th>
      <th>Course Fee</th>
      <th>Submitted Fee</th>
      <th>Payment remark</th>
      
      <th>Payment Method</th>

       <th>Registration Date</th>
      
     
    </tr>
  </thead>
  <tbody>

  		<tr>
  			<td>{{$post->id}}</td>

  			<td>@php if(!empty($post->image))

  			{
  				@endphp
  				<img src="{{'/upload/' .$post->image}}">
  				@php
  			}
  			else{
  			@endphp
  			<p>Image not found</p>
  			@php
  		}@endphp
  		</td>
  			
  			<td>{{$post->student_name}}</td>
        <td>{{$post->father_name}}</td>
         <td>{{$post->dob}}</td>
        <td>{{$post->course}}</td>
        <td>{{$post->contact_number}}</td>

        <td>{{$post->student_email}}</td>
        <td>{{$post->course_fee}}</td>
         <td>{{$post->submitted_fee}}</td>
        <td>{{$post->payment_remark}}</td>
        <td>{{$post->payment_method}}</td>


         <td>{{$post->registration_date}}</td>
       

  		</tr>

       

  </tbody>
</table>
	
	</body>
	</html>

@endsection