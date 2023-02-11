@extends('site.template.master')

@section('title', 'Contato')

@section('content')

    <div class="container">

        @if ($data['post'])
            <div class="alert alert-success">
                Mensagem enviada com sucesso!
            </div>
        @else
            <div class="">

            </div>
        @endif

        {!! Form::open(['route' => 'contato', 'class' => 'needs-validation', 'novalidate']) !!}

        <div class="form-group row">
            <div class="form-group mb-3 col-8">
                {!! Form::label('validationNome', 'Nome:') !!}
                {!! Form::text('nome', null, [
                    'placeholder' => 'Insira seu nome',
                    'class' => 'form-control',
                    'id' => 'validationNome',
                ]) !!}
                <div class="valid-feedback"></div>
                <div class="invalid-feedback">
                    O campo é obrigatório
                </div>
            </div>


            <div class="form-group mb-3 col-4">
                {!! Form::label('validationTelefone', 'Telefone:') !!}
                {!! Form::text('telefone', null, [
                    'placeholder' => 'Insira seu telefone',
                    'class' => 'form-control',
                    'id' => 'validationTelefone',
                ]) !!}
                <div class="valid-feedback"></div>
                <div class="invalid-feedback">
                    O campo é obrigatório
                </div>
            </div>
        </div>

        <div class="form-group mb-3">
            {!! Form::label('validationEmail', 'E-mail:') !!}
            {!! Form::email('email', null, [
                'placeholder' => 'Insira seu email',
                'class' => 'form-control',
                'id' => 'validationEmail',
                'required'
            ]) !!}
            <div class="valid-feedback"></div>
            <div class="invalid-feedback">
                O campo é obrigatório
            </div>
        </div>

        <div class="form-group">
            {!! Form::submit('Enviar Agora', ['class' => 'btn btn-success']) !!}
        </div>

        {!! Form::close() !!}

    </div>

@endsection
