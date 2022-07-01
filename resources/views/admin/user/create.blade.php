@extends('adminlte::page')

@section('title', 'Add User')

@section('content_header')
<h1>Users</h1>
@stop

@section('content')
{{-- Treating errors --}}
@if ($errors->any())
    <div class="alert alert-danger">
        <strong>Whoops!</strong> There were some problems with your input.<br><br>
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

<div class="card card-dark">
    <div class="card-header">
        <h3 class="card-title">Add User</h3>
    </div>
    <form action="{{ route('user.store')}}" method="POST">
        @csrf
        <div class="card-body">
            <div class="form-group">
                <x-adminlte-input name="username" label="* All fields required." label-class="text-danger" placeholder="username" required>
                    <x-slot name="prependSlot">
                        <div class="input-group-text">
                            <i class="fas fa-at text-lightblue"></i>
                        </div>
                    </x-slot>
                </x-adminlte-input>
            </div>

            <div class="form-group">
                <x-adminlte-input name="name" placeholder="full name" required>
                    <x-slot name="prependSlot">
                        <div class="input-group-text">
                            <i class="fas fa-user text-lightblue"></i>
                        </div>
                    </x-slot>
                </x-adminlte-input>
            </div>

            <div class="form-group">
                <x-adminlte-input name="email" type="email" placeholder="email" required>
                    <x-slot name="prependSlot">
                        <div class="input-group-text">
                            <i class="fas fa-envelope text-lightblue"></i>
                        </div>
                    </x-slot>
                </x-adminlte-input>
            </div>

            <div class="form-group">
                <x-adminlte-input name="password" type="password" placeholder="password" required>
                    <x-slot name="prependSlot">
                        <div class="input-group-text">
                            <i class="fas fa-key text-lightblue"></i>
                        </div>
                    </x-slot>
                </x-adminlte-input>
            </div>
            
        </div>

        <div class="card-footer">
            <button type="submit" class="btn btn-primary">Submit</button>
        </div>
    </form>
</div>

@stop

@section('css')
<link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
@stop