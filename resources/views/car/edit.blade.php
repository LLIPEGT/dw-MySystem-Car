@extends('templates.main')

@section('content')
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-body">
                        <legend class="text-center">EDIÇÃO DE CARRO</legend>
                        <form action="{{ route('car.update', $car->id) }}" method="POST">
                            @csrf
                            @method('PUT')
                            <div class="form-group">
                                <label for="mold-name" class="col-form-label">Preencha com:</label>
                                <x-input label="Placa" name="plate" value="{{$car->plate}}"/>
                                <x-select label="Modelo" name="mold_id" :options="$mold" value="{{$car->mold->id}}"/>
                                <x-select label="Estado" name="state_id" :options="$state" value="{{$car->state->id}}"/>
                                <x-select label="Cor" name="color_id" :options="$color" value="{{$car->color->id}}"/>
                            <button type="submit" class="btn btn-success btn-block">Editar</button>
                            <a href="{{ route('car.index') }}" class="btn btn-secondary btn-block">Voltar</a>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
