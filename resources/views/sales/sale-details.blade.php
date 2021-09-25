@extends('adminlte::page')

@section('title', 'Pago')

@section('content_header')
   
@stop

@section('content')
    
    <x-alerts/>
    @include('sales.ticket.ticket-sale',['sale'=>$sale,'company'=>$company])
   
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop