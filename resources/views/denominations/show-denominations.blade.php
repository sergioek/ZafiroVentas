@extends('adminlte::page')

@section('title', 'Ver denominaciones')

@section('content_header')
    <h1>Denominaciones de billetes o formas de pago</h1>
@stop

@section('content')
    <p>Busque una denominación</p>
   
    @livewire('denomination.show-denomination')
   
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop