@extends('adminlte::page')

@section('title', 'Dashboard - Sistema de Ventas')

@section('content_header')
    <h1 class="text-bold text-primary">{{'Bienvenido' . ' '.auth()->user()->name}}</h1>
@stop

@section('content')
    <p class="text-bold">Sistema de ventas</p>
    <p>Aquí puede visualizar algunas tareas del sistema.</p>
    @include('dashboard.content-dashboard')
@stop
    
@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop