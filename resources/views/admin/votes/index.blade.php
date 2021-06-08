@extends('adminlte::page')

@section('title', 'Lista de Opções')

@section('content_header')
    <div class="col-12 d-flex justify-content-between">
        <h1>Lista de Opções</h1>
        <a href="{{ route('admin.votes.create') }}" class="btn btn-primary">Adicionar</a>
    </div>
@stop

@section('content')
    <div class="col-12">
        <table class="table table-striped table-responsive">
            <thead>
                <tr>
                    <th scope="col">#ID</th>
                    <th scope="col">Ativo?</th>
                    <th scope="col">Título</th>
                    <th scope="col">Ação</th>
                </tr>
            </thead>
            <tbody>
                @foreach($votes as $vote)
                <tr>
                    <th scope="row">{{ $vote->id }}</th>
                    <td>{{ $vote->active ? 'Sim' : 'Não' }}</td>
                    <td>{{ $vote->title }}</td>
                    <td class="d-inline-flex">
                        <a href="{{ route('admin.votes.edit', $vote)}}" class="btn btn-warning text-light mr-2"><i class="far fa-edit"></i></a>
                        <form method="POST" action="{{ route('admin.votes.destroy', $vote) }}">
                            {!! csrf_field() !!}
                            <input type="hidden" name="_method" value="delete">
                            <button onclick="return confirm('Deseja realmente excluir a opção {{ $vote->title }}?')" class="btn btn-danger text-light"><i class="fas fa-trash"></i></button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
        {!! $votes->links() !!}
    </div>
@stop