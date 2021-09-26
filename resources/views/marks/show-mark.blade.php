@extends('adminlte::page')

@section('title', 'Ver marcas de producto')

@section('content_header')
    <h1>Marcas de Producto</h1>
@stop

@section('content')
    <p>Ver las marcas de producto de su empresa.</p>
    <x-alerts/>
    @livewire('mark.show-mark')

@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop