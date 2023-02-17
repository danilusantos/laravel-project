@extends('site.template.master')

@section('title', 'Detalhes - '.$event->title)

@section('content')
    <main>
        <div class="container mt-3">
            <div class="p-3 d-flex align-items-end justify-content-start">
                <a href="{{ route('events') }}">
                    <button class="btn btn-primary btn-principal">
                        Voltar
                    </button>
                </a>
            </div>

            <div class="d-flex align-items-center justify-content-around">
                <div class="w-75 m-3">
                    <figure>
                        <img src="/site/img/events/{{$event->image}}" class="img-fluid rounded-4" alt="{{$event->slug}}">
                    </figure>
                </div>
                <div class="w-100 m-3">
                    <h4 class="text-secondary mb-3">{{$event->title}}</h4>
                    <p class="text-secondary text-justify">{{$event->description}}</p>
                </div>
            </div>
        </div>
    </main>
@endsection
