@extends('site.template.master')

@section('title', 'Página Inicial')

@section('content')
<main class="bg-dark text-white d-flex align-items-center justify-content-center flex-column">

    <h1>InfoDev</h1>
    <h3>Seu site para criação de eventos</h3>
    <a href="{{route('events')}}">
        <button class="btn btn-outline-light btn-lg">Eventos Disponíveis</button>
    </a>

</main>

@endsection
