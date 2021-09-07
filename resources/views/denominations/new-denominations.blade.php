@extends('adminlte::page')

@section('title', 'Crear denominaciones')

@section('content_header')
    <h1>Denominaciones de billetes o formas de pago</h1>
@stop

@section('content')

    <p>Crear una denominación</p>
    <x-alerts/>
    @include('denominations.form.form-new-denominations')
   
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop