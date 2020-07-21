
@extends('admin.layout.master')
@section("title","View Franchise")

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


    @if(session('message'))
    <p class="alert alert-success">
      {{session('message')}}
    </p>
    @endif

    @if(session('delete'))
    <p class="alert alert-danger">
      {{session('delete')}}
    </p>
    @endif

		
    <span class="badge badge-pill badge-info" style="width: 100%;"><h2 style="font-weight: bold;">View All Frenchise</h2></span>
    <br><br><br>


		<table class="table">
  <thead>
    <tr>
      <th>Sr.no</th>
      <th>Franchise Name</th>
      <th>Franchise Code</th>
      <th>Email</th>
      <th>Address</th>
      <th>Contactno</th>
      
      <th>action</th>
    </tr>
  </thead>
  <tbody>
    <?php $count=1;?>
@foreach($curds as $curd)

  		<tr>
  			<td>{{$count++}}</td>
  			
  			<td>{{$curd->franchise_name}}</td>
        <td>{{$curd->franchise_code}}</td>
         <td>{{$curd->franchise_email}}</td>
        <td>{{$curd->address}}</td>
        <td>{{$curd->contact_number}}</td>
       
  			</td>

  			<td>
  				
         <button type="button" class="btn btn-success"><a href="{{url('/curds/view/' .$curd->id)}}" style="color: black;"><i class="fa fa-eye"></i></a></button>

         <button type="button" class="btn btn-primary"><a href="{{url('/curds/edit/' .$curd->id)}}" style="color: black;"> <i class="fa fa-edit"></i></a></button>

         <button type="button" class="btn btn-danger"><a href="{{url('/curds/delete/' .$curd->id)}}" style="color: black;"><i class="fa fa-user-times"></i></a></button>
  			</td>
        

  		</tr>

          @endforeach

  </tbody>
</table>
	
	</body>
	</html>

@endsection