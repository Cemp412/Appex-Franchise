@extends('admin.layout.master')
@section("title","Show fees")
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



    @if(session('update'))
        <p class="alert alert-success">
            <i class="fa fa-check-circle"></i> {{session('update')}}
        </p>
        @endif


    @if(session('delete'))
    <p class="alert alert-danger">
     <i class="fa fa-check-circle"></i> {{session('delete')}}
    </p>
    @endif 

		
    <span class="badge badge-pill badge-info" style="width: 100%;"><h2 style="font-weight: bold;">View All Student</h2></span>
    <br><br><br>


		<table class="table">
  <thead>
    <tr>
      <th>Regno</th>
      <th>Submitted Fee</th>
      <th>Payment Method</th>
      <th>Payment Remark</th>
      <th>Course Fee</th>
      <th>Date</th>
      
      
     
    </tr>
  </thead>
  <tbody>

@foreach($shows as $show)



  		<input type="hidden" name="franchise_name" value="{{$show->franchise_name}}">
  			
  			<td>{{$show->regno}}</td>
        <td>{{$show->submitted_fee}}</td>
        <td>{{$show->payment_method}}</td>
         <td>{{$show->payment_remark}}</td>
        <td>{{$show->course_fee}}</td>
        <td>{{$show->created_at}}</td>
        

  		</tr>

          @endforeach

  </tbody>
</table>
	
	</body>
	</html>

@endsection