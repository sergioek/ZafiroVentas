@extends('adminlte::page')

@section('title', 'Editar categoria')

@section('content_header')
    <h1>Categorias de productos</h1>
@stop

@section('content')
    <p>Editar una categoria</p>
  
    @include('categories.form.form-edit-category')

@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop