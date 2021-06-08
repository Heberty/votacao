@extends('adminlte::page')

@section('title', 'Adicionar Opção')

@section('content_header')
    <div class="row">
        <div class="col-12">
            <h1>Adicionar Opção</h1>
        </div>
    </div>
@stop

@section('content')
    <div class="row">
        <div class="col-12 col-lg-6 col-xl-4">
            <form method="POST" action="{{ route('admin.votes.store') }}">
                @csrf
                <div class="form-group">
                    <label for="title">Título</label>
                    <input type="text" class="form-control" id="title" name="title">
                    <small class="form-text text-muted">Inseri aqui um nome para sua opção.</small>
                </div>
                <div class="form-group">
                    <div class="custom-control custom-switch">
                        <input type="checkbox" class="custom-control-input" id="active" name="active" checked> 
                        <label class="custom-control-label" for="active">Ativo?</label>
                    </div>
                </div>
                <button type="submit" class="btn btn-primary">Salvar</button>
            </form>
        </div>
    </div>
@stop