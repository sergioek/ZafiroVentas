@extends('adminlte::page')

@section('title', 'Usuarios del sistema')

@section('content_header')
    <h1>Editar Usuarios</h1>
@stop

@section('content')
    <p>Cambiar el estado y el rol de usuarios empleados.</p>
    <x-alerts/>
    @include('users.form.form-user-edit')
   
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop