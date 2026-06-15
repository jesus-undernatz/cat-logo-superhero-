@extends('superheroes.layout')

@section('content')
<div class="card card-success">
    <div class="card-header">
        <h3 class="card-title">Cadastrar Novo Super-Herói</h3>
    </div>

    <form action="{{ route('superheroes.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="card-body">
            <div class="form-group">
                <label for="name">Nome Real</label>
                <input type="text" name="name" class="form-control @error('name') is-invalid @enderror" id="name" value="{{ old('name') }}" placeholder="Ex: Peter Parker">
                @error('name') <span class="invalid-feedback">{{ $message }}</span> @enderror
            </div>

            <div class="form-group">
                <label for="superhero_name">Nome de Herói</label>
                <input type="text" name="superhero_name" class="form-control @error('superhero_name') is-invalid @enderror" id="superhero_name" value="{{ old('superhero_name') }}" placeholder="Ex: Homem-Aranha">
                @error('superhero_name') <span class="invalid-feedback">{{ $message }}</span> @enderror
            </div>

            <div class="form-group">
                <label for="superpower">Superpoder</label>
                <input type="text" name="superpower" class="form-control @error('superpower') is-invalid @enderror" id="superpower" value="{{ old('superpower') }}" placeholder="Ex: Sentido Aranha, Soltar teias">
                @error('superpower') <span class="invalid-feedback">{{ $message }}</span> @enderror
            </div>

            <div class="form-group">
                <label for="weakness">Fraqueza</label>
                <input type="text" name="weakness" class="form-control @error('weakness') is-invalid @enderror" id="weakness" value="{{ old('weakness') }}" placeholder="Ex: Inseticida, Contas pra pagar">
                @error('weakness') <span class="invalid-feedback">{{ $message }}</span> @enderror
            </div>

            <div class="form-group">
                <label for="image">Foto do Herói</label>
                <input type="file" name="image" class="form-control-file @error('image') is-invalid @enderror" id="image">
                @error('image') <span class="text-danger text-sm d-block mt-1">{{ $message }}</span> @enderror
            </div>
        </div>

        <div class="card-footer">
            <button type="submit" class="btn btn-success">Salvar Herói</button>
            <a href="{{ route('superheroes.index') }}" class="btn btn-secondary">Cancelar</a>
        </div>
    </form>
</div>
@endsection
