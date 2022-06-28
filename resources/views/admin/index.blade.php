@extends('adminlte::page')

@section('title', 'Home')

@section('content_header')
    <h1>Home Page</h1>
    
@stop

@section('content')
    <p>Welcome to this beautiful admin panel.</p>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script></script>
   <!--  
    {{-- exhibit info session messages  --}}
    @if(Session::has('info')) 
       <script>
           toastr.info("{{ Session::get('info') }}");                  
       </script>
    @endif  -->
@stop