@extends('adminlte::page')

@section('title', 'Ver Clientes')

@section('content_header')
    <h1>Clientes</h1>
@stop

@section('content')
    <p>Busque un cliente</p>
    <x-alerts/>
    @livewire('cuestomer.cuestomer')
   
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop