@extends('layouts.app')

@section('content')

    <div class="row justify-content-center mt-3">
        <div class="col-md-8">

            <div class="card">
                <div class="card-header">
                    <div class="float-start">
                        Informação do Carro
                    </div>
                    <div class="float-end">
                        <a href="{{ route('carros.index') }}" class="btn btn-primary btn-sm">&larr; Voltar</a>
                    </div>
                </div>
                <div class="card-body">

                    <div class="row">
                        <label for="modelo"
                            class="col-md-4 col-form-label text-md-end text-start"><strong>Modelo:</strong></label>
                        <div class="col-md-6" style="line-height: 35px;">
                            {{ $carro->modelo }}
                        </div>
                    </div>

                    <div class="row">
                        <label for="marca"
                            class="col-md-4 col-form-label text-md-end text-start"><strong>Marca:</strong></label>
                        <div class="col-md-6" style="line-height: 35px;">
                            {{ $carro->marca }}
                        </div>
                    </div>

                    <div class="row">
                        <label for="ano"
                            class="col-md-4 col-form-label text-md-end text-start"><strong>Ano:</strong></label>
                        <div class="col-md-6" style="line-height: 35px;">
                            {{ $carro->ano }}
                        </div>
                    </div>

                    <div class="row">
                        <label for="datacad" class="col-md-4 col-form-label text-md-end text-start"><strong>Data de
                                Cadastro:</strong></label>
                        <div class="col-md-6" style="line-height: 35px;">
                            {{ $carro->datacad }}
                        </div>
                    </div>

                    <div class="row">
                        <label for="foto"
                            class="col-md-4 col-form-label text-md-end text-start"><strong>Foto:</strong></label>
                        <div class="col-md-6" style="line-height: 35px;">
                            {{ $carro->foto }}
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>

@endsection