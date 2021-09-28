@extends('adminlte::page')

@section('title', 'Arqueos de Caja')

@section('content_header')
    <h1>Arqueos de Caja</h1>
@stop

@section('content')
    <p>Operaciones de arqueo de caja.</p>
    <x-alerts/>
    @include('boxes.form.box-operations')
   
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop