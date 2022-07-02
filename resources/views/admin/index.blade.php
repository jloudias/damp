@extends('adminlte::page')

@section('title', 'Usuários')

@section('content_header')
    <h1>Dashboard</h1>
@stop

@section('content')
    <head>Welcome to the dashboard</head>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    {{-- exhibit info session messages --}}
    @if(Session::has('info'))
        <script>
            toastr.info("{{ Session::get('info') }}");                  
        </script>
    @endif
@stop