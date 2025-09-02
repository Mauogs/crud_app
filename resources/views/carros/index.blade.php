@extends('layouts.app')

@section('content')

    <div class="row justify-content-center mt-3">
        <div class="col-md-12">

            @session('success')
                <div class="alert alert-success" role="alert">
                    {{ $value }}
                </div>
            @endsession

            <div class="card">
                <div class="card-header">Lista de Carros</div>
                <div class="card-body">
                    <a href="{{ route('carros.create') }}" class="btn btn-success btn-sm my-2"><i
                            class="bi bi-plus-circle"></i> Adicionar Novo Carro</a>
                    <table class="table table-striped table-bordered">
                        <thead>
                            <tr>
                                <th scope="col">Id</th>
                                <th scope="col">Modelo</th>
                                <th scope="col">Marca</th>
                                <th scope="col">Ano</th>
                                <th scope="col">Data de Cadastro</th>
                                <th scope="col">Ação</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse ($carros as $carro)
                                <tr>
                                    <th scope="row">{{ $loop->iteration }}</th>
                                    <td>{{ $carro->modelo }}</td>
                                    <td>{{ $carro->marca }}</td>
                                    <td>{{ $carro->ano }}</td>
                                    <td>{{ $carro->datacad }}</td>
                                    <td>
                                        <form action="{{ route('carros.destroy', $carro->id) }}" method="post">
                                            @csrf
                                            @method('DELETE')

                                            <a href="{{ route('carros.show', $carro->id) }}" class="btn btn-warning btn-sm"><i
                                                    class="bi bi-eye"></i> Mostrar</a>

                                            <a href="{{ route('carros.edit', $carro->id) }}" class="btn btn-primary btn-sm"><i
                                                    class="bi bi-pencil-square"></i> Editar</a>

                                            <button type="submit" class="btn btn-danger btn-sm"
                                                onclick="return confirm('Você quer excluir este carro?');"><i
                                                    class="bi bi-trash"></i> Excluir</button>
                                        </form>
                                    </td>
                                </tr>
                            @empty
                                <td colspan="6">
                                    <span class="text-danger">
                                        <strong>Nenhum Carro Encontrado!</strong>
                                    </span>
                                </td>
                            @endforelse
                        </tbody>
                    </table>

                    {{ $carros->links() }}

                </div>
            </div>
        </div>
    </div>

@endsection