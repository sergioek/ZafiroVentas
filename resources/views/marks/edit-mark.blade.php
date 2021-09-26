@extends('adminlte::page')

@section('title', 'Editar una marca')

@section('content_header')
    <h1>Editar marca</h1>
@stop

@section('content')
    <p>Editar una marca de producto</p>
    <x-alerts/>
    @include('marks.form.form-edit-mark')


@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop