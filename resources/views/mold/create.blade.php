@extends('templates.main')
@section('content')

    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-body">
                        <legend class="text-center">CRIAÇÃO DE MODELOS</legend>
                        <form action="{{ route('mold.store') }}" method="POST">
                            @csrf
                            <div class="form-group">
                                <label for="color-name" class="col-form-label">Preencha com:</label>
                                <div class="input-group mb-3">
                                    <span class="input-group-text" id="inputGroup-sizing-sm"><i class="fas fa-palette">Nome</i></span>
                                    <input type="text" name="name" class="form-control" id="color-name" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm" required>
                                </div>

                                <div class="input-group mb-3">
                                    <span class="input-group-text" id="inputGroup-sizing-sm"><i class="fas fa-palette">Eixo</i></span>
                                    <select name="brand_id" class="form-control" aria-label="Sizing example select" aria-describedby="selectGroup-sizing-sm" required>
                                        <option value=""></option>
                                        @foreach($brand as $item)
                                            <option value="{{ $item->id }}" {{ $item->id == old('eixo_id') ? 'selected' : '' }}>
                                                {{ $item->name }}
                                            </option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <button type="submit" class="btn btn-success btn-block">Salvar</button>
                            <a href="{{ route('mold.index') }}" class="btn btn-secondary btn-block">Voltar</a>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
