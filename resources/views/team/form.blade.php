
<div class="form-group mb-3">
    <label class="form-label">   {{ Form::label('Nombre') }}</label>
    <div>
        {{ Form::text('name', $team->name, ['class' => 'form-control' .
        ($errors->has('name') ? ' is-invalid' : ''), 'placeholder' => 'Nombre']) }}
        {!! $errors->first('name', '<div class="invalid-feedback">:message</div>') !!}
        <small class="form-hint">equipo <b>nombre</b> requerido.</small>
    </div>
</div>
<div class="form-group mb-3">
    <label class="form-label">   {{ Form::label('Propietario') }}</label>
    <div>
        {{ Form::text('owner', $team->owner, ['class' => 'form-control' .
        ($errors->has('owner') ? ' is-invalid' : ''), 'placeholder' => 'Propietario']) }}
        {!! $errors->first('owner', '<div class="invalid-feedback">:message</div>') !!}
        <small class="form-hint">equipo <b>propietario</b> requerido.</small>
    </div>
</div>
<div class="form-group mb-3">
    <label class="form-label">   {{ Form::label('Entrenador') }}</label>
    <div>
        {{ Form::text('coach', $team->coach, ['class' => 'form-control' .
        ($errors->has('coach') ? ' is-invalid' : ''), 'placeholder' => 'Entrenador']) }}
        {!! $errors->first('coach', '<div class="invalid-feedback">:message</div>') !!}
        <small class="form-hint">equipo <b>entrenador</b> requerido.</small>
    </div>
</div>
<div class="form-group mb-3">
    <label class="form-label">   {{ Form::label('Fundacion') }}</label>
    <div>
        {{ Form::text('foundation', $team->foundation, ['class' => 'form-control' .
        ($errors->has('foundation') ? ' is-invalid' : ''), 'placeholder' => 'Fundacion']) }}
        {!! $errors->first('foundation', '<div class="invalid-feedback">:message</div>') !!}
        <small class="form-hint">equipo <b>fundacion</b> requerido.</small>
    </div>
</div>
<div class="form-group mb-3">
    <label class="form-label">   {{ Form::label('Escudo') }}</label>
    @if ($team->team_photo_path <> null)
    <div class="mb-2">
        <img src="{{ asset($team->team_photo_path) }}" alt="{{ $team->name }}" width = "150">
    </div>
    @endif
    <div>
        {{ Form::file('team_photo_path', null, ['class' => 'form-control-file' .
        ($errors->has('team_photo_path') ? ' is-invalid' : ''), 'placeholder' => 'Escudo']) }}
        {!! $errors->first('team_photo_path', '<div class="invalid-feedback">:message</div>') !!}
        <small class="form-hint">equipo <b>escudo</b> requerido.</small>
    </div>
</div>
<div class="form-group mb-3">
    <label class="form-label">   {{ Form::label('Liga') }}</label>
    <div>
        <select name="id_league" id="id_league" class="form-control select2bs4 @error('id_league') is-invalid @enderror">
            @foreach ($league as $league)
            <option value="{{ $league->id }}" {{ old('id_league') == $league->id ? 'selected=selected' : '' }}>
                    {{ $league->name }}
            @endforeach
        </select>
        {!! $errors->first('id_league', '<div class="invalid-feedback">:message</div>') !!}
        <small class="form-hint">equipo <b>liga</b> requerido.</small>
    </div>
</div>

    <div class="form-footer">
        <div class="text-end">
            <div class="d-flex">
                <a href="{{ route('teams.index') }}" class="btn btn-danger">Cancelar</a>
                <button type="submit" class="btn btn-primary ms-auto ajax-submit">Guardar</button>
            </div>
        </div>
    </div>
