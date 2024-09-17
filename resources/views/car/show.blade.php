@extends('templates.main')

@section('content')
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="card col-md-6">
                <div class="card-body">
                    <legend class="text-center">Marca {{ $car->plate}}</legend>
                    <x-input label="Placa" name="" value="{{$car->plate}}"  disabled/>
                    <x-input label="Cor" name="" value="{{$car->color->name}}"  disabled/>
                    <x-input label="Modelo" name="" value="{{$car->mold->name}}"  disabled/>
                    <x-input label="Estado" name="" value="{{$car->state->name}} ({{$car->state->abbreviation}})"  disabled/>
                    <a href="{{ route('car.index') }}" class="btn btn-secondary btn-block">Voltar</a>
                </div>
            </div>
        </div>
    </div>
@endsection
