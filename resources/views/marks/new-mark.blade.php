@extends('adminlte::page')

@section('title', 'Nueva marca de producto')

@section('content_header')
    <h1>Nueva Marca</h1>
@stop

@section('content')
    <p>Crear una marca de producto</p>
    <x-alerts/>
    @include('marks.form.form-new-mark')

@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop