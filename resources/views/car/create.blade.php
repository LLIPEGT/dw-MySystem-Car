@extends('templates.main')
@section('content')

    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-body">
                        <legend class="text-center">CRIAÇÃO DE CARRO</legend>
                        <form action="{{ route('car.store') }}" method="POST">
                            @csrf
                            <label for="car-plate" class="col-form-label">Preencha com:</label>
                            <x-input label="Placa" name="plate"/>
                            <x-select label="Cor" name="color_id" :options="$color"/>
                            <x-select label="Modelo" name="mold_id" :options="$mold"/>
                            <x-select label="Estado" name="state_id" :options="$state"/>
                            <button type="submit" class="btn btn-success btn-block">Salvar</button>
                            <a href="{{ route('car.index') }}" class="btn btn-secondary btn-block">Voltar</a>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
