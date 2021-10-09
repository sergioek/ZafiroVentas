@extends('adminlte::page')

@section('title', 'Ver Productos')

@section('content_header')
  
    <h1>Productos</h1>
@stop

@section('content')
    <p>Busque un producto</p>
    
    <x-alerts/>
   
    @livewire('product.show-product',['idCategory'=>$id])
   
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>

@stop