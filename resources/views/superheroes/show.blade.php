@extends('superheroes.layout')

@section('content')
<div class="row justify-content-center">
    <div class="col-md-6">
        <div class="card card-primary card-outline">
            <div class="card-body box-profile">
                <div class="text-center mb-3">
                    @if($superhero->image)
                        <img class="profile-user-img img-fluid img-circle"
                             src="{{ asset('storage/' . $superhero->image) }}"
                             alt="Foto de {{ $superhero->superhero_name }}"
                             style="width: 150px; height: 150px; object-fit: cover;">
                    @else
                        <div class="bg-secondary d-inline-flex align-items-center justify-content-center rounded-circle" style="width: 150px; height: 150px;">
                            <i class="fas fa-user-secret fa-4x"></i>
                        </div>
                    @endif
                </div>

                <h3 class="profile-username text-center font-weight-bold">{{ $superhero->superhero_name }}</h3>
                <p class="text-muted text-center">Identidade Secreta: {{ $superhero->name }}</p>

                <ul class="list-group list-group-unbordered mb-3">
                    <li class="list-group-item">
                        <b>Superpoder</b> <span class="float-right text-primary font-weight-bold">{{ $superhero->superpower }}</span>
                    </li>
                    <li class="list-group-item">
                        <b>Fraqueza</b> <span class="float-right text-danger font-weight-bold">{{ $superhero->weakness }}</span>
                    </li>
                    <li class="list-group-item">
                        <b>Cadastrado em</b> <span class="float-right text-muted">{{ $superhero->created_at->format('d/m/Y H:i') }}</span>
                    </li>
                </ul>

                <div class="d-flex justify-content-between">
                    <a href="{{ route('superheroes.index') }}" class="btn btn-secondary">
                        <i class="fas fa-arrow-left"></i> Voltar
                    </a>
                    <a href="{{ route('superheroes.edit', $superhero->id) }}" class="btn btn-warning text-white">
                        <i class="fas fa-edit"></i> Editar Dados
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
