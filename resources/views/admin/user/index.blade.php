@extends('adminlte::page')

@section('title', 'Usuários')

@section('content_header')
<h1>Usuários</h1>
@stop

@section('content')
@php
$heads = [
'ID',
'Login',
'Name',
'Email',
'Actions',
];

$config=[
    'order'=>[[1,'asc']],
    'columns'=>[null,null,null,null,['orderable'=>false]],
]

@endphp

{{-- Minimal example / fill data using the component slot --}}
<x-adminlte-datatable id="tblUsers" :heads="$heads" :config="$config" hoverable bordered compressed>

    @foreach($users as $u)
    <tr>
        <td>{{ $u->id}}</td>
        <td>{{ $u->username}}</td>
        <td>{{ $u->name}}</td>
        <td>{{ $u->email}}</td>
        <td>
            <nobr>
                <button class="btn btn-xs btn-default text-primary mx-1 shadow" title="Edit">
                    <i class="fa fa-lg fa-fw fa-pen"></i>
                </button>

                <button class="btn btn-xs btn-default text-danger mx-1 shadow" title="Delete">
                    <i class="fa fa-lg fa-fw fa-trash"></i>
                </button>
                <button class="btn btn-xs btn-default text-teal mx-1 shadow" title="Details">
                    <i class="fa fa-lg fa-fw fa-eye"></i>
                </button>
            </nobr>

        </td>
    </tr>
    @endforeach
</x-adminlte-datatable>

@stop

@section('css')
<link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
{{-- Datables plugin --}}
<script>
    $(document).ready( function () {
        $('#tblUsers').DataTable();
    });
</script>

{{-- exhibit info session messages --}}
@if(Session::has('info'))
<script>
    toastr.info("{{ Session::get('info') }}");                  
</script>
@endif
@stop