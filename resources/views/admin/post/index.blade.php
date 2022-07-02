@extends('adminlte::page')

@section('title', 'Posts')

@section('content_header')
    <h1>Posts</h1>
@stop

@section('content')
    <head>Welcome to the blog</head>
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