@extends('adminlte::page')

@section('title', 'Editar empresa')

@section('content_header')
    <h1>Editar los datos de la empresa</h1>
@stop

@section('content')
    <p>Cambiar los datos correspondientes a la empresa.</p>
    <x-alerts/>
    @include('company.update-company')
   
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop