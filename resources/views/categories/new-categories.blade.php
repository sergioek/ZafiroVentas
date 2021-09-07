@extends('adminlte::page')

@section('title', 'Nueva categoria')

@section('content_header')
    <h1>Categorias de productos</h1>
@stop

@section('content')
    <p>Crear una categoria</p>
    <x-alerts/>
    @include('categories.form.form-new-category')

@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop