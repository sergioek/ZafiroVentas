@extends('adminlte::page')

@section('title', 'Editar Producto')

@section('content_header')
    <h1>Editar producto</h1>
@stop

@section('content')
    <p>Editar un producto para la venta</p>
    <x-alerts/>
    @include('products.form.form-edit-product')

@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop