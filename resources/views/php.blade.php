@extends('layout')

@section('title')
  phppage
@endsection
@section("content")
 <h2>php Page</h2>
 @foreach($data as $value)
  <li>{{$value}}</li>
 @endforeach
@endsection
