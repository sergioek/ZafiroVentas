@extends('adminlte::page')

@section('title', 'Movimientos de Caja')

@section('content_header')
    <h1>Movimientos de Caja</h1>
@stop

@section('content')
    <p>Ver los movimientos de caja.</p>
    <x-alerts/>
    @livewire('boxes.box-show')
   
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop