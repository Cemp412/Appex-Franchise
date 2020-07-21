
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
    <br><br>

   <!--  @if(session('update'))
        <p class="alert alert-success">
            <i class="fa fa-check-circle"></i> {{session('update')}}
        </p>
        @endif
 -->

    <!-- @if(session('delete'))
    <p class="alert alert-danger">
     <i class="fa fa-check-circle"></i> {{session('delete')}}
    </p>
    @endif  -->

		
    <span class="badge badge-pill badge-info" style="width: 100%;"><h2 style="font-weight: bold;">View All Student</h2></span>
    <br><br><br>


		<table class="table">
  <thead>
    <tr>
      <th>Sr.no</th>
      <th>Image</th>
      <th>Student Name</th>
      <th>Father Name</th>
      <th>Email</th>
      <th>D.O.B</th>
      <th>Course</th>
      
      
      <th>action</th>
    </tr>
  </thead>
  <tbody>
    <?php $count=1;?>
@foreach($curds as $curd)

  		<tr>
  			<td>{{$count++}}</td>
  			<td>@php if(!empty($curd->image))

        	{
        		@endphp

        		<img src="{{url('/upload/' .$curd->image)}}" style="width: 100px; height: 100px;">
        		@php
        	}
        	else{
        	@endphp
        	<p>image not found</p>
        	@php
        }@endphp

        </td>
  			
  			<td>{{$curd->student_name}}</td>
        <td>{{$curd->father_name}}</td>
        <td>{{$curd->student_email}}</td>
         <td>{{$curd->dob}}</td>
        <td>{{$curd->course}}</td>
        

  			<td>
  				
         <button type="button" class="btn btn-success"><a href="{{url('/curds/viewStudent/' .$curd->id)}}" style="color: black;"><i class="fa fa-eye"></i></a></button>

         <button type="button" class="btn btn-primary"><a href="{{url('/curds/editStudent/' .$curd->id)}}" style="color: black;"> <i class="fa fa-edit"></i></a></button>

         <button type="button" class="btn btn-danger"><a href="{{url('/curds/deleteStudent/' .$curd->id)}}" style="color: black;"><i class="fa fa-user-times"></i></a></button>
  			</td>
        

  		</tr>

          @endforeach

  </tbody>
</table>
	
	</body>
	</html>


@endsection