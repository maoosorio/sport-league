
<div class="form-group mb-3">
    <label class="form-label">   {{ Form::label('Nombre') }}</label>
    <div>
        {{ Form::text('name', $admin->name, ['class' => 'form-control' .
        ($errors->has('name') ? ' is-invalid' : ''), 'placeholder' => 'Nombre']) }}
        {!! $errors->first('name', '<div class="invalid-feedback">:message</div>') !!}
        <small class="form-hint">administrador <b>nombre</b> requerido.</small>
    </div>
</div>
<div class="form-group mb-3">
    <label class="form-label">   {{ Form::label('Telefono') }}</label>
    <div>
        {{ Form::text('phone', $admin->phone, ['class' => 'form-control' .
        ($errors->has('phone') ? ' is-invalid' : ''), 'placeholder' => 'Telefono']) }}
        {!! $errors->first('phone', '<div class="invalid-feedback">:message</div>') !!}
        <small class="form-hint">administrador <b>telefono</b> requerido.</small>
    </div>
</div>
<div class="form-group mb-3">
    <label class="form-label">   {{ Form::label('email') }}</label>
    <div>
        {{ Form::text('email', $admin->email, ['class' => 'form-control' .
        ($errors->has('email') ? ' is-invalid' : ''), 'placeholder' => 'Email']) }}
        {!! $errors->first('email', '<div class="invalid-feedback">:message</div>') !!}
        <small class="form-hint">administrador <b>email</b> requerido.</small>
    </div>
</div>
<div class="form-group mb-3">
    <label class="form-label">   {{ Form::label('Contraseña') }}</label>
    <div>
        {{ Form::text('password', $admin->password, ['class' => 'form-control' .
        ($errors->has('password') ? ' is-invalid' : ''), 'placeholder' => 'Contraseña']) }}
        {!! $errors->first('password', '<div class="invalid-feedback">:message</div>') !!}
        <small class="form-hint">administrador <b>password</b> requerido.</small>
    </div>
</div>
<div class="form-group mb-3">
    <label class="form-label">   {{ Form::label('Foto') }}</label>
    @if ($admin->admin_photo_path <> null)
    <div class="mb-2">
        <img src="{{ asset($admin->admin_photo_path) }}" alt="{{ $admin->name }}" width = "150">
    </div>
    @endif
    <div>
        {{ Form::file('admin_photo_path', null, ['class' => 'form-control-file' .
        ($errors->has('admin_photo_path') ? ' is-invalid' : ''), 'placeholder' => 'Foto']) }}
        {!! $errors->first('admin_photo_path', '<div class="invalid-feedback">:message</div>') !!}
        <small class="form-hint">administrador <b>foto</b> requerido.</small>
    </div>
</div>

    <div class="form-footer">
        <div class="text-end">
            <div class="d-flex">
                <a href="{{ route('admins.index') }}" class="btn btn-danger">Cancelar</a>
                <button type="submit" class="btn btn-primary ms-auto ajax-submit">Guardar</button>
            </div>
        </div>
    </div>
