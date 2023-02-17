@extends('site.template.master')

@section('title', 'Criar Novo Evento')

@section('content')
    <main class="d-flex align-items-center justify-content-center">

        <div class="container col-md-6 offset-md-3" id="event_create_container">
            <div class="container-fluid">
                <div class="row">
                    @if (session('msg'))
                        <div class="alert alert-danger text-center">
                            {{ session('msg') }}
                        </div>
                    @endif
                </div>
            </div>

            <h2 class="text-center title h2 text-primary">Criar Novo Evento</h2>

            {!! Form::open(['route' => 'storeEvent', 'enctype' => 'multipart/form-data']) !!}

            <div class="form-group mb-3">
                {!! Form::label('title', 'Titulo: ', ['class' => 'form-label']) !!}
                {!! Form::text('title', null, ['class' => 'form-control', 'placeholder' => 'Nome do evento: ', 'id' => 'title']) !!}
            </div>

            <div class="form-group mb-3">
                {!! Form::label('city', 'Local: ', ['class' => 'form-label']) !!}
                {!! Form::text('city', null, [
                    'class' => 'form-control',
                    'placeholder' => 'Localização do evento: ',
                    'id' => 'city',
                ]) !!}
            </div>

            <div class="form-group mb-3">
                {!! Form::label('description', 'Descrição: ', ['class' => 'form-label']) !!}
                {!! Form::textarea('description', null, [
                    'class' => 'form-control',
                    'placeholder' => 'Descrição do Evento: ',
                    'id' => 'description',
                    'style' => 'resize: none',
                ]) !!}
            </div>

            <div class="form-group mb-3">
                {!! Form::label('private', 'Privado: ', ['class' => 'form-label']) !!}
                {!! Form::select(
                    'private',
                    [
                        0 => 'Não',
                        1 => 'Sim',
                    ],
                    0,
                    ['class' => 'form-control', 'id' => 'private'],
                ) !!}
            </div>

            <div class="form-group mb-3">
                {!! Form::label('imageEvent', 'Capa do evento: ', ['class' => 'form-label']) !!}
                {!! Form::file('imageEvent', null, ['class' => 'form-control', 'id' => 'imageEvent']) !!}
            </div>

            <div class="form-group mb-3 d-grid gap-2 d-md-flex justify-content-md-end">
                {!! Form::submit('Criar evento', ['class' => 'btn btn-success', 'id' => 'criarEventoBotao']) !!}
            </div>

            {!! Form::close() !!}

        </div>
    </main>

@endsection
