@extends('superheroes.layout')

@section('content')
<div class="card card-warning">
    <div class="card-header">
        <h3 class="card-title text-white">Editar Herói: {{ $superhero->superhero_name }}</h3>
    </div>

    <form action="{{ route('superheroes.update', $superhero->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <div class="card-body">
            <div class="form-group">
                <label for="name">Nome Real</label>
                <input type="text" name="name" class="form-control @error('name') is-invalid @enderror" id="name" value="{{ old('name', $superhero->name) }}">
                @error('name') <span class="invalid-feedback">{{ $message }}</span> @enderror
            </div>

            <div class="form-group">
                <label for="superhero_name">Nome de Herói</label>
                <input type="text" name="superhero_name" class="form-control @error('superhero_name') is-invalid @enderror" id="superhero_name" value="{{ old('superhero_name', $superhero->superhero_name) }}">
                @error('superhero_name') <span class="invalid-feedback">{{ $message }}</span> @enderror
            </div>

            <div class="form-group">
                <label for="superpower">Superpoder</label>
                <input type="text" name="superpower" class="form-control @error('superpower') is-invalid @enderror" id="superpower" value="{{ old('superpower', $superhero->superpower) }}">
                @error('superpower') <span class="invalid-feedback">{{ $message }}</span> @enderror
            </div>

            <div class="form-group">
                <label for="weakness">Fraqueza</label>
                <input type="text" name="weakness" class="form-control @error('weakness') is-invalid @enderror" id="weakness" value="{{ old('weakness', $superhero->weakness) }}">
                @error('weakness') <span class="invalid-feedback">{{ $message }}</span> @enderror
            </div>

            <div class="form-group">
                <label for="image">Substituir Foto do Herói (Opcional)</label>
                <input type="file" name="image" class="form-control-file @error('image') is-invalid @enderror" id="image">
                @error('image') <span class="text-danger text-sm d-block mt-1">{{ $message }}</span> @enderror

                @if($superhero->image)
                    <div class="mt-3">
                        <p class="mb-1 text-sm text-muted">Foto Atual:</p>
                        <img src="{{ asset('storage/' . $superhero->image) }}" class="img-thumbnail" style="width: 120px; height: 120px; object-fit: cover;">
                    </div>
                @endif
            </div>
        </div>

        <div class="card-footer">
            <button type="submit" class="btn btn-warning text-white">Atualizar Dados</button>
            <a href="{{ route('superheroes.index') }}" class="btn btn-secondary">Cancelar</a>
        </div>
    </form>
</div>
@endsection
