@extends('site.template.master')

@section('title', 'Produtos')

@section('content')

<section class="container d-flex align-items-center justify-content-center flex-column">
    <h3>Esse é o conteúdo da Página de Produtos</h3>

    <ul class="list-group list-group-horizontal">
        @foreach ($produtos as $produto)
            <a href="#{{ $produto }}">
                <li class="list-group-item">{{ $produto }}</li>
            </a>
        @endforeach
    </ul>
</section>

@endsection
