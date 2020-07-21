@extends('admin.layout.master')
@section("title","View fees")
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


    <!-- @if(session('message'))
    <p class="alert alert-success">
      <i class="fa fa-check-circle"></i> {{session('message')}}
    </p>
    @endif -->

    @if(session('delete'))
    <p class="alert alert-danger">
      <i class="fa fa-check-circle"></i> {{session('delete')}}
    </p>
    @endif

		
    <span class="badge badge-pill badge-info" style="width: 100%;"><h2 style="font-weight: bold;">View Fees</h2></span>
    <br><br><br>


		<table class="table">
  <thead>
    <tr>
    	<th>Srno.</th>
      <th>Regno</th>
      <th>Course Fee</th>
      <th>Remaning Fee</th>
      <th>Action</th>
    </tr>
  </thead>
  <tbody>
    <?php $count=1;?>
@foreach($datas as $data)

  		<tr>
  			<td>{{$count++}}</td>
  			<td>{{$data->regno}}</td>
  			
  			<td>{{$data->course_fee}}</td>
        <td>{{$data->course_fee-$data->submitted_fee}}</td>

        @if($data->course_fee!=$data->submitted_fee)
        <td>

        	<button type="submit" class="btn btn-primary"><a href="{{url('/curds/addfee/' .$data->id)}}" style="color: black;"><i class="fa fa-edit"></i></a></button>

          <button type="submit" class="btn btn-danger"><a href="{{url('/curds/delete/' .$data->id)}}" style="color: black;"><i class="fa fa-user-times"></i></a></button>
        </td>
        @else
        <a href=""></a>

        <td><button type="submit" class="btn btn-danger"><a href="{{url('/curds/delete/' .$data->id)}}" style="color: black;"><i class="fa fa-user-times"></i></a></button></td>
        @endif
         
  
        

  		</tr>

          @endforeach

  </tbody>
</table>
	
	</body>
	</html>

@endsection