@extends('layouts.app')
@section('content')
<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-4">
            <div class="card">
                <h5 class="card-header">Trocar Senha</h5>
                @if(session()->has('error'))
                <span class="alert alert-danger">
                    <strong>{{ session()->get('error') }}</strong>
                </span>
                @endif
                @if(session()->has('success'))
                <span class="alert alert-success">
                    <strong>{{ session()->get('success') }}</strong>
                </span>
                @endif

                <div class="card-body">
                    <form method="POST" action="{{ route('update.password') }}">
                        @csrf
                        <div class="mb-3">
                            <label for="current_password" class="form-label">Senha atual:</label>
                            <input type="password" class="form-control @error('current_password') is-invalid @enderror"
                                name="current_password" autocomplete="current_password">
                            @error('current_password')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label for="password" class="form-label">Nova senha:</label>

                            <input type="password" class="form-control @error('password') is-invalid @enderror"
                                name="password" autocomplete="password">
                            @error('password')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror

                        </div>

                        <div class="mb-3">
                            <label for="password_confirmation" class="form-label">Confirme a
                                senha:</label>

                            <input type="password"
                                class="form-control @error('password_confirmation') is-invalid @enderror"
                                name="password_confirmation" autocomplete="password_confirmation">
                            @error('password_confirmation')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror

                        </div>

                        <div class="mt-4 mb-2">
                            <button type="submit" class="btn btn-primary ">
                                Enviar
                            </button>
                            <button type="reset" class="btn btn-secondary ms-3">
                                Cancelar
                            </button>
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </div>

@stop