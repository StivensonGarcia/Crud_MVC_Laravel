@extends('layouts.app')

@section('template_title')
    {{ $cancione->name ?? "{{ __('Show') Cancione" }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">{{ __('Show') }} Cancione</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('canciones.index') }}"> {{ __('Back') }}</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Nombre:</strong>
                            {{ $cancione->nombre }}
                        </div>
                        <div class="form-group">
                            <strong>Ritmo:</strong>
                            {{ $cancione->ritmo }}
                        </div>
                        <div class="form-group">
                            <strong>Duracion:</strong>
                            {{ $cancione->duracion }}
                        </div>
                        <div class="form-group">
                            <strong>Album:</strong>
                            {{ $cancione->album }}
                        </div>
                        <div class="form-group">
                            <strong>Posicionenalbum:</strong>
                            {{ $cancione->posicionenalbum }}
                        </div>
                        <div class="form-group">
                            <strong>Banda:</strong>
                            {{ $cancione->banda }}
                        </div>
                        <div class="form-group">
                            <strong>Interprete:</strong>
                            {{ $cancione->interprete }}
                        </div>
                        <div class="form-group">
                            <strong>Autor:</strong>
                            {{ $cancione->autor }}
                        </div>
                        <div class="form-group">
                            <strong>Fechalanzamiento:</strong>
                            {{ $cancione->fechalanzamiento }}
                        </div>
                        <div class="form-group">
                            <strong>Usuariocc:</strong>
                            {{ $cancione->usuariocc }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
