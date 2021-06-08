@extends('adminlte::page')

@section('title', 'Editar Opção')

@section('content_header')

    <div class="row">
        <div class="col-12">
            <h1>Editar Opção - {{ $vote->title }}</h1>
        </div>
    </div>

@stop

@section('content')

    <div class="row">
        <div class="col-12 col-lg-6 col-xl-4">
            <form method="POST" action="{{ route('admin.votes.update', $vote) }}">
                @csrf
                @method('PATCH')
                <div class="form-group">
                    <label for="title">Título</label>
                    <input type="text" class="form-control" id="title" name="title" value="{{ $vote->title }}">
                    <small class="form-text text-muted">Este é o nome da sua Opção.</small>
                </div>
                <div class="form-group">
                    <div class="custom-control custom-switch">
                        <input type="checkbox" class="custom-control-input" id="active" name="active" {{ $vote->active == 1 ? 'checked' : '' }}> 
                        <label class="custom-control-label" for="active">Ativo?</label>
                    </div>
                </div>
                <button type="submit" class="btn btn-primary">Salvar</button>
            </form>
        </div>
    </div>

@stop