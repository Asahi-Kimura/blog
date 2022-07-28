@extends('layouts.template')
@section('headline','ブログタイトル')

@section('content')
  <h1>{{$blog -> title}}</h1>
  <br>
  <p>{{$blog -> content}}</p>
@endsection
  
    