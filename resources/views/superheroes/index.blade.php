@extends('superheroes.layout')

@section('content')
<div class="card">
    <div class="card-header d-flex justify-content-between align-items-center">
        <h3 class="card-title font-weight-bold">Lista de Heróis</h3>
        <a href="{{ route('superheroes.create') }}" class="btn btn-success ml-auto">
            <i class="fas fa-plus"></i> Novo Herói
        </a>
    </div>
    <div class="card-body p-0">
        <table class="table table-striped table-hover m-0">
            <thead>
                <tr>
                    <th style="width: 80px">Foto</th>
                    <th>Nome Real</th>
                    <th>Nome de Herói</th>
                    <th>Superpoder</th>
                    <th>Fraqueza</th>
                    <th style="width: 200px">Ações</th>
                </tr>
            </thead>
            <tbody>
                @forelse($heroes as $hero)
                <tr>
                    <td>
                        @if($hero->image)
                            <img src="{{ asset('storage/' . $hero->image) }}" class="img-thumbnail" style="width: 50px; height: 50px; object-fit: cover;">
                        @else
                            <div class="bg-secondary d-flex align-items-center justify-content-center rounded" style="width: 50px; height: 50px;">
                                <i class="fas fa-user-secret"></i>
                            </div>
                        @endif
                    </td>
                    <td>{{ $hero->name }}</td>
                    <td><span class="badge badge-primary text-sm">{{ $hero->superhero_name }}</span></td>
                    <td>{{ $hero->superpower }}</td>
                    <td>{{ $hero->weakness }}</td>
                    <td>
                        <a href="{{ route('superheroes.show', $hero->id) }}" class="btn btn-sm btn-info">
                            <i class="fas fa-eye"></i> Ver
                        </a>
                        <a href="{{ route('superheroes.edit', $hero->id) }}" class="btn btn-sm btn-warning">
                            <i class="fas fa-edit"></i> Editar
                        </a>
                        <form action="{{ route('superheroes.destroy', $hero->id) }}" method="POST" class="d-inline" onsubmit="return confirm('Deseja mesmo banir esse herói?')">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-sm btn-danger">
                                <i class="fas fa-trash"></i> Excluir
                            </button>
                        </form>
                    </td>
                </tr>
                @empty
                <tr>
                    <td colspan="6" class="text-center py-4">Nenhum herói convocado ainda.</td>
                </tr>
                @endforelse
            </tbody>
        </table>
    </div>
</div>
@endsection
