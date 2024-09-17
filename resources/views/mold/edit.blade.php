@extends('templates.main')

@section('content')
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-body">
                        <legend class="text-center">EDIÇÃO DE MODELO</legend>
                        <form action="{{ route('mold.update', $mold->id) }}" method="POST">
                            @csrf
                            @method('PUT')
                            <div class="form-group">
                                <label for="mold-name" class="col-form-label">Preencha com:</label>
                                <div class="input-group mb-3">
                                    <span class="input-group-text" id="inputGroup-sizing-sm"><i class="fas fa-palette">Nome</i></span>
                                    <input type="text" name="name" value="{{ $mold->name }}" class="form-control" id="mold-name" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm" required>
                                </div>
                            </div>
                            <div class="input-group mb-3">
                                <span class="input-group-text" id="inputGroup-sizing-sm"><i class="fas fa-palette">Marca</i></span>
                                <select name="brand_id" class="form-control" aria-label="Sizing example select" aria-describedby="selectGroup-sizing-sm" required>  
                                    @foreach($brand as $item)
                                        <option value="{{ $item->id }}" {{ $item->id == old('brand_id') ? 'selected' : '' }}>
                                            {{ $item->name }}
                                        </option>
                                    @endforeach
                                </select>
                            </div>
                            <button type="submit" class="btn btn-success btn-block">Editar</button>
                            <a href="{{ route('mold.index') }}" class="btn btn-secondary btn-block">Voltar</a>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
