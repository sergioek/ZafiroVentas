@extends('adminlte::page')

@section('title', 'Ver denominaciones')

@section('content_header')
    <h1>Denominaciones de billetes o formas de pago</h1>
@stop

@section('content')
    <p>Busque una denominación</p>
    
    @if (session('msg'))
    <div class="alert alert-success alert-dismissible fade show" role="alert">
        <strong>Exito!</strong>Se edito una denominación.
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
        </button>
    </div>
     @endif
   
    @livewire('denomination.show-denomination')
   
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop