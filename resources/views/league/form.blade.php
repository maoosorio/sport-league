<div class="form-group mb-3">
    <label class="form-label"> {{ Form::label('Nombre') }}</label>
    <div>
        {{ Form::text('name', $league->name, [
            'class' => 'form-control' . ($errors->has('name') ? ' is-invalid' : ''),
            'placeholder' => 'Nombre',
        ]) }}
        {!! $errors->first('name', '<div class="invalid-feedback">:message</div>') !!}
        <small class="form-hint">liga <b>nombre</b> requerido.</small>
    </div>
</div>
<div class="form-group mb-3">
    <label class="form-label"> {{ Form::label('Administrador') }}</label>
    <div>
        {!! $errors->first('id_admin', '<div class="invalid-feedback">:message</div>') !!}
        <select name="id_admin" id="id_admin" class="form-control select2bs4 @error('id_admin') is-invalid @enderror">
            @foreach ($admin as $admin)
            <option value="{{ $admin->id }}" {{ old('id_admin') == $admin->id ? 'selected=selected' : '' }}>
                    {{ $admin->name }}
            @endforeach
        </select>
        <small class="form-hint">liga <b>administrador</b> requerido.</small>
    </div>
</div>

<div class="form-footer">
    <div class="text-end">
        <div class="d-flex">
            <a href="{{ route('leagues.index') }}" class="btn btn-danger">Cancelar</a>
            <button type="submit" class="btn btn-primary ms-auto ajax-submit">Guardar</button>
        </div>
    </div>
</div>
