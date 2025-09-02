@extends('layouts.app')

@section('content')

    <div class="row justify-content-center mt-3">
        <div class="col-md-8">

            @session('success')
                <div class="alert alert-success" role="alert">
                    {{ $value }}
                </div>
            @endsession

            <div class="card">
                <div class="card-header">
                    <div class="float-start">
                        Editar Carro
                    </div>
                    <div class="float-end">
                        <a href="{{ route('carros.index') }}" class="btn btn-primary btn-sm">&larr; Voltar</a>
                    </div>
                </div>
                <div class="card-body">
                    <form action="{{ route('carros.update', $carro->id) }}" method="post">
                        @csrf
                        @method("PUT")

                        <div class="mb-3 row">
                            <label for="modelo" class="col-md-4 col-form-label text-md-end text-start">Modelo</label>
                            <div class="col-md-6">
                                <input type="text" class="form-control @error('modelo') is-invalid @enderror" id="modelo"
                                    name="modelo" value="{{ $carro->modelo }}">
                                @error('modelo')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>

                        <div class="mb-3 row">
                            <label for="marca" class="col-md-4 col-form-label text-md-end text-start">Marca</label>
                            <div class="col-md-6">
                                <input type="text" class="form-control @error('marca') is-invalid @enderror" id="marca"
                                    name="marca" value="{{ $carro->marca }}">
                                @error('marca')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>

                        <div class="mb-3 row">
                            <label for="ano" class="col-md-4 col-form-label text-md-end text-start">Ano</label>
                            <div class="col-md-6">
                                <input type="number" class="form-control @error('ano') is-invalid @enderror" id="ano"
                                    name="ano" value="{{ $carro->ano }}">
                                @error('ano')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>

                        <div class="mb-3 row">
                            <label for="datacad" class="col-md-4 col-form-label text-md-end text-start">Data de
                                Cadastro</label>
                            <div class="col-md-6">
                                <input type="date" class="form-control @error('datacad') is-invalid @enderror" id="datacad"
                                    name="datacad" value="{{ $carro->datacad }}">
                                @error('datacad')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>

                        <div class="mb-3 row">
                            <label for="foto" class="col-md-4 col-form-label text-md-end text-start">Foto</label>
                            <div class="col-md-6">
                                <textarea class="form-control @error('foto') is-invalid @enderror" id="foto"
                                    name="foto">{{ $carro->foto }}</textarea>
                                @error('foto')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>

                        <div class="mb-3 row">
                            <input type="submit" class="col-md-3 offset-md-5 btn btn-primary" value="Update">
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </div>

@endsection