@extends('admin.layout.master')

@section("title","Edit Certificate")

@section('content')

<div class="content mt-3">
            <div class="animated fadeIn">


                <div class="row">
                    <div class="col-lg-12">
                         <!-- .card -->
                         <!-- <h1 style="font-weight: bold;">Add Franchise Data</h1> -->
                         <span class="badge badge-pill badge-info" style="width: 100%;"><h2 style="font-weight: bold;">Add Student Detail</h2></span>

                    </div>
                    <!--/.col-->

                    <div class="col-lg-12">
                       <!--  <div class="card"> -->
  <form action="{{url('saveCertificate')}}" method="post" enctype="multipart/form-data">
  {{csrf_field()}} 
  <input type="hidden" name="id" value="{{$pass->id}}">

  <div class="card-body card-block">
  	<div class="col-12">
        <div class="form-group">
            <label class=" form-control-label">Regno</label>
            <input type="text" value="{{$pass->regno}}" readonly="" placeholder="Regno" class="form-control">
        </div>
  </div>

  <div class="col-12">
        <div class="form-group">
            <label class=" form-control-label">Student Name</label>
            <input type="text" value="{{$pass->student_name}}"  placeholder="Regno" class="form-control">
        </div>
  </div>

  <div class="col-12">
        <div class="form-group">
            <label class=" form-control-label">Certificate</label><br>
            <input type="file"  name="certificate">
        </div>
  </div>

  <div class="col-12">
        <div class="form-group">
            <button type="submit" class="btn btn-info">Add Certificate</button>
        </div>
  </div>


  </div> 

</form>
</div>
</div>
</div>
</div>



@endsection
