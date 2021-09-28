@extends('adminlte::page')

@section('title', 'Ventas realizadas')

@section('content_header')
    <h1>Ventas por cliente</h1>
@stop

@section('content')
    <p>Ver las compras realizadas por cada cliente.</p>
    <x-alerts/>
    @livewire('sale.sale-cuestomer')
   
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop