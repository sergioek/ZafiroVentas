@extends('adminlte::page')

@section('title', 'Nuevo producto')

@section('content_header')
    <h1>Nuevo producto</h1>
@stop

@section('content')
    <p>Crear un nuevo producto para la venta</p>
    <x-alerts/>
    @include('products.form.form-new-product')

@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop