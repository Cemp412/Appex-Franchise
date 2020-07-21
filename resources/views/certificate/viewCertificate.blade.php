@extends('admin.layout.master')
@section("title","Certificate")
@section('content')
<img src="{{asset('/upload/' .$data->certificate)}}">

@endsection


