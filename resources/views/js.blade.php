@extends('layout')

@section('title')
  jspage
@endsection
@section("content")
 <h2>js Page</h2>
 @foreach($data as $value)
  <li>{{$value}}</li>
 @endforeach
@endsection
