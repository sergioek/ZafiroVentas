@extends('adminlte::page')

@section('title', 'Editar una denominacion')

@section('content_header')
    <h1>Denominaciones de billetes o formas de pago</h1>
@stop

@section('content')
    <p>Editar una denominación</p>
   
    @include('denominations.form.form-edit-denominations')
   
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop