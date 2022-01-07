@extends('layouts.app')

@section('content')
    <div class="bg-white w-128 h-60 rounded shadow-md flex card text-grey-darkest p-2">
        <img class="scale-100" src="{{ $comics->images }}" alt="Room Image">
        <div class="w-full flex flex-col p-3">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Titulo:</strong>
                    {{ $comics->title }}
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Descrição:</strong>
                    {{ $comics->description }}
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>EAN:</strong>
                    {{ $comics->ean }}
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Preço:</strong>
                    {{ $comics->prices }}
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Imagens:</strong>
                    {{ $comics->images }}
                </div>
            </div>
        </div>
    </div>
@endsection