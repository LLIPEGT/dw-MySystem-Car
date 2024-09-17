@extends('templates.main')
@section('content')

    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-body">
                        <legend class="text-center">CRIAÇÃO DE MARCA</legend>
                        <form action="{{ route('brand.store') }}" method="POST">
                            @csrf
                            <div class="form-group">
                                <label for="brand-name" class="col-form-label">Preencha com:</label>
                                <div class="input-group mb-3">
                                    <span class="input-group-text" id="inputGroup-sizing-sm"><i class="fas fa-palette">Nome</i></span>
                                    <input type="text" name="name" class="form-control" id="brand-name" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm" required>
                                </div>
                            </div>
                            <button type="submit" class="btn btn-success btn-block">Salvar</button>
                            <a href="{{ route('brand.index') }}" class="btn btn-secondary btn-block">Voltar</a>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
