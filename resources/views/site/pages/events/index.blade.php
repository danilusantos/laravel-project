@extends('site.template.master')

@section('title', 'Criar Novo Evento')

@section('content')

    <div class="container col-md-6 offset-md-3" id="event_create_container">

        {!! Form::open(['url' => '/create']) !!}



        {!! Form::close() !!}

    </div>

@endsection
