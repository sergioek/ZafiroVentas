@extends('adminlte::page')

@section('title', 'Nuevo Cliente')

@section('content_header')
    <h1>Agregar Clientes</h1>
@stop

@section('content')
    <p>Agregar un nuevo cliente a su punto de venta.</p>
    <x-alerts/>
    @include('cuestomers.form.form-new-cuestomer')
   
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop