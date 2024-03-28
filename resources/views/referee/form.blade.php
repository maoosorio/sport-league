
<div class="form-group mb-3">
    <label class="form-label">   {{ Form::label('Nombre') }}</label>
    <div>
        {{ Form::text('name', $referee->name, ['class' => 'form-control' .
        ($errors->has('name') ? ' is-invalid' : ''), 'placeholder' => 'Nombre']) }}
        {!! $errors->first('name', '<div class="invalid-feedback">:message</div>') !!}
        <small class="form-hint">arbitro <b>nombre</b> requerido.</small>
    </div>
</div>
<div class="form-group mb-3">
    <label class="form-label">   {{ Form::label('Foto') }}</label>
    @if ($referee->referee_photo_path <> null)
    <div class="mb-2">
        <img src="{{ asset($referee->referee_photo_path) }}" alt="{{ $referee->name }}" width = "150">
    </div>
    @endif
    <div>
        {{ Form::file('referee_photo_path', null, ['class' => 'form-control-file' .
        ($errors->has('referee_photo_path') ? ' is-invalid' : ''), 'placeholder' => 'Escudo']) }}
        {!! $errors->first('referee_photo_path', '<div class="invalid-feedback">:message</div>') !!}
        <small class="form-hint">arbitro <b>foto</b> requerido.</small>
    </div>
</div>

    <div class="form-footer">
        <div class="text-end">
            <div class="d-flex">
                <a href="{{ route('referees.index') }}" class="btn btn-danger">Cancelar</a>
                <button type="submit" class="btn btn-primary ms-auto ajax-submit">Guardar</button>
            </div>
        </div>
    </div>
