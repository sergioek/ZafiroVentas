@extends('adminlte::page')

@section('title', 'Reportes de rendimiento de negocio')

@section('content_header')
    <h1>Rendimiento del negocio</h1>
@stop

@section('content')
    <p>Ver evolucion de ventas en el ultimo mes.</p>
    <x-alerts/>
    @include('reports.month')
   
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop