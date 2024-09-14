@extends('templates.main')

@section('content')
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="card col-md-6">
                <div class="card-body">
                    <legend class="text-center">Marca {{ $brand->name}}</legend>
                        <div class="form-group">
                            <div class="input-group mb-3">
                                <span class="input-group-text" id="inputGroup-sizing-sm"><i class="fas fa-palette">Nome</i></span>
                                <input type="text" name="name" value="{{ $brand->name }}" disabled class="form-control" id="color-name" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm" required>
                            </div>
                        </div>
                        <a href="{{ route('brand.index') }}" class="btn btn-secondary btn-block">Voltar</a>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
