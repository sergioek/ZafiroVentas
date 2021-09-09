@extends('adminlte::page')

@section('title', 'Carrito de compras')

@section('content_header')
    <h1>Carrito de compras</h1>
@stop

@section('content')
    <p>Vea los productos agregados al carrito para finalizar la compra.</p>
    <x-alerts/>
    @livewire('cart.cart')
   
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop