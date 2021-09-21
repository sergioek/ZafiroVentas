@extends('adminlte::page')

@section('title', 'Pago')

@section('content_header')
    <h1>Ventas realizadas</h1>
@stop

@section('content')
    <p>Ver las ventas realizadas y sus detalles.</p>
    <x-alerts/>
    @livewire('sale.sale-show')
   
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop