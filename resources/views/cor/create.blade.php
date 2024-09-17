@extends('templates.main')
@section('content')

    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-body">
                        <legend class="text-center">CRIAÇÃO DE COR</legend>
                        <form action="{{ route('color.store') }}" method="POST">
                            @csrf
                            <label for="color-name" class="col-form-label">Preencha com:</label>
                            <x-input label="Nome" name="name"/>
                            <button type="submit" class="btn btn-success btn-block">Salvar</button>
                            <a href="{{ route('color.index') }}" class="btn btn-secondary btn-block">Voltar</a>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
