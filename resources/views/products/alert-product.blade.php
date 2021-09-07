@extends('adminlte::page')

@section('title', 'Stock de productos')

@section('content_header')
    <h1>Productos</h1>
@stop

@section('content')
    <p>Vea los productos que faltan en el stock o los que esten por agotarse</p>
    <x-alerts/>
    @livewire('product.alert-product')
    
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop