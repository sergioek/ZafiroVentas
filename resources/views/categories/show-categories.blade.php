@extends('adminlte::page')

@section('title', 'Ver categorias')

@section('content_header')
    <h1>Categorias de productos</h1>
@stop

@section('content')
    <p>Busque una categoria</p>
   
    @livewire('category.show-category')
   
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop