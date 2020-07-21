
@extends('admin.layout.master')
@section("title","View All Franchise")
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
    
    <span class="badge badge-pill badge-info" style="width: 100%;"><h2 style="font-weight: bold;">View All Frenchise</h2></span>
    <br><br>
    <a href="{{url('view')}}"><button type="button" class="btn btn-danger" style="float: right;margin-right: 89px;
    margin-bottom: 11px;"><i class="fa fa-backward"></i> Back</button></a>


		<table class="table">
  <thead>
    <tr>
      <th>Sr.no</th>
      <th>Franchise Name</th>
      <th>Franchise Code</th>
      <th>Franchise Email</th>
      <th>Contact Name</th>

      <th>Contact Number</th>
      <th>Address</th>
      <th>Account Number</th>
      <th>IFSC Code</th>
      <th>Bank Account Holder</th>
      
      <th>Bank Name</th>
     
    </tr>
  </thead>
  <tbody>

  		<tr>
  			<td>{{$post->id}}</td>
  			
  			<td>{{$post->franchise_name}}</td>
        <td>{{$post->franchise_code}}</td>
         <td>{{$post->franchise_email}}</td>
        <td>{{$post->contact_name}}</td>
        <td>{{$post->contact_number}}</td>

        <td>{{$post->address}}</td>
        <td>{{$post->account_number}}</td>
         <td>{{$post->ifsc_code}}</td>
        <td>{{$post->account_holder}}</td>
        <td>{{$post->bank_name}}</td>
       

  		</tr>

       

  </tbody>
</table>
	
	</body>
	</html>
@endsection