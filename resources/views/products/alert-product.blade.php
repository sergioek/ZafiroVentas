@extends('adminlte::page')

@section('title', 'Stock de productos')

@section('content_header')
    <h1>Productos</h1>
@stop

@section('content')
    <p>Vea los productos que faltan en el stock o los que esten por agotarse</p>

    @if(session('msg'))
        
    <div class="alert alert-primary alert-dismissible fade show" role="alert">
        <strong>Exito!</strong>Se amplio el stock de un producto.
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
        </button>
    </div>
    @endif

    @livewire('product.alert-product')
    
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop