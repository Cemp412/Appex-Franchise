@extends('admin.layout.master')
@section("title","Show")

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
      <th>Regno</th>
      <th>Course</th>
      <th>Franchise Name</th>
      <th>Course Fees</th>
      <th>Submitted Fees</th>
      
      
    </tr>
  </thead>
  <tbody>
    <?php $count=1;?>
@foreach($datas as $data)

  		<tr>
  			<td>{{$count++}}</td>
  			
  			
  			<td>{{$data->regno}}</td>
        <td>{{$data->course}}</td>
        <td>{{$data->franchise_name}}</td>
        <td>{{$data->course_fee}}</td>
        <td>{{$data->submitted_fee}}</td>

        

  			
  		</tr>

          @endforeach

  </tbody>
</table>
	
	</body>
	</html>


@endsection