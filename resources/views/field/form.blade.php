
<div class="form-group mb-3">
    <label class="form-label">   {{ Form::label('Nombre') }}</label>
    <div>
        {{ Form::text('name', $field->name, ['class' => 'form-control' .
        ($errors->has('name') ? ' is-invalid' : ''), 'placeholder' => 'Nombre']) }}
        {!! $errors->first('name', '<div class="invalid-feedback">:message</div>') !!}
        <small class="form-hint">campo <b>nombre</b> requerido.</small>
    </div>
</div>
<div class="form-group mb-3">
    <label class="form-label">   {{ Form::label('Ubicacion') }}</label>
    <div>
        {{ Form::text('location', $field->location, ['class' => 'form-control' .
        ($errors->has('location') ? ' is-invalid' : ''), 'placeholder' => 'Ubicacion']) }}
        {!! $errors->first('location', '<div class="invalid-feedback">:message</div>') !!}
        <small class="form-hint">campo <b>ubicacion</b> requerido.</small>
    </div>
</div>
<div class="form-group mb-3">
    <label class="form-label">   {{ Form::label('Foto') }}</label>
    @if ($field->field_photo_path <> null)
    <div class="mb-2">
        <img src="{{ asset($field->field_photo_path) }}" alt="{{ $field->name }}" width = "150">
    </div>
    @endif
    <div>
        {{ Form::file('field_photo_path', null, ['class' => 'form-control-file' .
        ($errors->has('field_photo_path') ? ' is-invalid' : ''), 'placeholder' => 'Foto']) }}
        {!! $errors->first('field_photo_path', '<div class="invalid-feedback">:message</div>') !!}
        <small class="form-hint">campo <b>foto</b> requerido.</small>
    </div>
</div>

    <div class="form-footer">
        <div class="text-end">
            <div class="d-flex">
                <a href="{{ route('fields.index') }}" class="btn btn-danger">Cancelar</a>
                <button type="submit" class="btn btn-primary ms-auto ajax-submit">Guardar</button>
            </div>
        </div>
    </div>
