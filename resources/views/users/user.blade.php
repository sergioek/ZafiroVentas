@extends('adminlte::page')

@section('title', 'Usuarios del sistema')

@section('content_header')
    <h1>Usuarios del Sistema</h1>
@stop

@section('content')
    <p>Ver los usuarios registrados en el sistema con roles de empleado.</p>
    <x-alerts/>
    @livewire('users.user-show')
   
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop