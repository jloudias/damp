@extends('adminlte::page')

@section('title', 'Usuários')
@section('plugins.Datatables',true)

@section('content_header')
<h1>Users</h1>
<br>
<a href="{{ route('user.create') }}">
    <x-adminlte-button label="Add User" theme="primary" icon="fas fa-plus"/>
</a>
@stop


@section('content')
@php
$heads = [
'Login',
'Name',
'Email',
'Actions',
];

$config=[
    'order'=>[[1,'asc']],
    'columns'=>[null,null,null,['orderable'=>false]],
]

@endphp

{{-- Minimal example / fill data using the component slot --}}
<x-adminlte-datatable id="tblUsers" :heads="$heads" :config="$config" head-theme="dark" hoverable compressed>

    @foreach($users as $u)
    <tr>
        <td>{{ $u->username}}</td>
        <td>{{ $u->name}}</td>
        <td>{{ $u->email}}</td>
        <td>
            <form action="{{ route('user.destroy',$u->id)}}" method="POST">
                @csrf
                @method('DELETE')
                <nobr>
                    <a href="{{ route('user.edit', $u->id)}}" class="btn btn-xs btn-default text-primary mx-1 shadow" title="Edit">
                        <i class="fa fa-lg fa-fw fa-pen"></i>
                    </a>

                    <button class="btn btn-xs btn-default text-teal mx-1 shadow" title="Details">
                        <i class="fa fa-lg fa-fw fa-eye"></i>
                    </button>
                        <button type="submit" class="btn btn-xs btn-default text-danger mx-1 shadow" title="Delete">
                        <i class="fa fa-lg fa-fw fa-trash"></i>
                    </button>
                </nobr>
            </form>

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
@if(Session::has('success'))
<script>
    toastr.success("{{ Session::get('success') }}");                  
</script>
@endif
@stop