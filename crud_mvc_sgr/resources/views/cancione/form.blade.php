<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('nombre') }}
            {{ Form::text('nombre', $cancione->nombre, ['class' => 'form-control' . ($errors->has('nombre') ? ' is-invalid' : ''), 'placeholder' => 'Nombre']) }}
            {!! $errors->first('nombre', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('ritmo') }}
            {{ Form::text('ritmo', $cancione->ritmo, ['class' => 'form-control' . ($errors->has('ritmo') ? ' is-invalid' : ''), 'placeholder' => 'Ritmo']) }}
            {!! $errors->first('ritmo', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('duracion') }}
            {{ Form::text('duracion', $cancione->duracion, ['class' => 'form-control' . ($errors->has('duracion') ? ' is-invalid' : ''), 'placeholder' => 'Duracion']) }}
            {!! $errors->first('duracion', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('album') }}
            {{ Form::text('album', $cancione->album, ['class' => 'form-control' . ($errors->has('album') ? ' is-invalid' : ''), 'placeholder' => 'Album']) }}
            {!! $errors->first('album', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('posicionenalbum') }}
            {{ Form::text('posicionenalbum', $cancione->posicionenalbum, ['class' => 'form-control' . ($errors->has('posicionenalbum') ? ' is-invalid' : ''), 'placeholder' => 'Posicionenalbum']) }}
            {!! $errors->first('posicionenalbum', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('banda') }}
            {{ Form::text('banda', $cancione->banda, ['class' => 'form-control' . ($errors->has('banda') ? ' is-invalid' : ''), 'placeholder' => 'Banda']) }}
            {!! $errors->first('banda', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('interprete') }}
            {{ Form::text('interprete', $cancione->interprete, ['class' => 'form-control' . ($errors->has('interprete') ? ' is-invalid' : ''), 'placeholder' => 'Interprete']) }}
            {!! $errors->first('interprete', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('autor') }}
            {{ Form::text('autor', $cancione->autor, ['class' => 'form-control' . ($errors->has('autor') ? ' is-invalid' : ''), 'placeholder' => 'Autor']) }}
            {!! $errors->first('autor', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('fechalanzamiento') }}
            {{ Form::text('fechalanzamiento', $cancione->fechalanzamiento, ['class' => 'form-control' . ($errors->has('fechalanzamiento') ? ' is-invalid' : ''), 'placeholder' => 'Fechalanzamiento']) }}
            {!! $errors->first('fechalanzamiento', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('usuariocc') }}
            {{ Form::select('usuariocc', $usuarios , $cancione->usuariocc, ['class' => 'form-control' . ($errors->has('usuariocc') ? ' is-invalid' : ''), 'placeholder' => 'Usuariocc']) }}
            {!! $errors->first('usuariocc', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">{{ __('Submit') }}</button>
    </div>
</div>