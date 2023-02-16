@extends('site.template.master')

@section('title', 'Página Inicial')

@section('content')
    <div class="p-3 d-flex align-items-end justify-content-end">
        <a href="/create">
            <button class="btn btn-primary btn-principal" id="btnAbrirModal">
                Criar Evento
            </button>
        </a>
    </div>

    <div class="container">
        <h3 class="text-center">Eventos</h3>
        <div class="">
            <div class="d-flex align-items-stretch flex-wrap justify-content-center">
                @foreach ($events as $event)
                    <div class="card m-3" style="width: 20rem;">
                        <div class="card-body">
                            <h5 class="card-title">{{ $event->title }}</h5>
                            <h6 class="card-subtitle mb-2 text-muted">{{ $event->description }}</h6>
                            <p class="card-text">{{ $event->city }}</p>
                            <a href="#" class="card-link">Card link</a>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>

    </div>

@endsection
