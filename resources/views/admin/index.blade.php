@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <div class="col-12">
        <h1>Dashboard</h1>
    </div>
@stop

@section('content')
    <div class="row">
        @forelse($votes as $vote)
            <div class="col-12 col-lg-3">
                <div class="small-box bg-info">
                    <div class="inner">
                    <h3>{{ $count->vote->id != $count->vote->vote_id ? +1 : '0' }}</h3>

                    <p>{{$count->vote->title}}</p>
                    </div>
                    <div class="icon">
                        <i class="ion ion-bag"></i>
                    </div>
                </div>
            </div>
        @empty
            <p>Sem votos</p>
        @endforelse
    </div>
    <div class="col-12">
        <p>Bem vindo ao painel de Votação {{-- {{ Auth::user()->name }} --}}</p>
    </div>
@stop