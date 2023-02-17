@extends('site.template.master')

@section('title', 'Página Inicial')

@section('content')
    <main>
        <div class="container-fluid">
            <div class="row">
                @if (session('msg'))
                    <div class="alert alert-success text-center">
                        {{ session('msg') }}
                    </div>
                @endif
            </div>
        </div>

        <div class="p-3 d-flex align-items-end justify-content-end">
            <a href="{{ route('createEvent') }}">
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
                            <img src="{{asset('site/img/events/'.$event->image)}}" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">{{ $event->title }}</h5>
                                <h6 class="card-subtitle mb-2 text-muted">{{ $event->description }}</h6>
                                <p class="card-text">{{ $event->city }}</p>
                                <a href="/events/{{ $event->slug}}" class="card-link">
                                    <button class="btn btn-warning btn-lg">Ver mais</button>
                                </a>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </main>

@endsection
