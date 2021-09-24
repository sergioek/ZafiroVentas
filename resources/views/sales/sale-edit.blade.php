@extends('adminlte::page')

@section('title', 'Actualizar Venta')

@section('content_header')
    <h1>Actualizar venta realizada</h1>
@stop

@section('content')
    <p>Actualizar el pago de la venta realizada.</p>
    <x-alerts/>
    @include('sales.form.form-edit-sale')

   
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop