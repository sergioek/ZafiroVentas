@extends('adminlte::page')

@section('title', 'Pago')

@section('content_header')
    <h1>Compra del carrito</h1>
@stop

@section('content')
    <p>Meotodo de pago de los productos agregados al carrito</p>
    <x-alerts/>
    @livewire('sale.sale')
   
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop