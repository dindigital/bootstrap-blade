@extends('layouts.template')

@section('css')
  <link rel="stylesheet" type="text/css" href="/assets/css/home.css" />
@stop

@section('js')
  <script type="text/javascript" src="/assets/js/home.js"></script>
@stop

@section('content')
  <h1>Hello!</h1>
  @include('partials.example')
@stop
