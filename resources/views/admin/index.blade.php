@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <div class="col-12">
        <h1>Dashboard</h1>
    </div>
@stop

@section('content')
    <div class="col-12">
        <p>Bem vindo ao painel de Votação {{-- {{ Auth::user()->name }} --}}</p>
    </div>
@stop