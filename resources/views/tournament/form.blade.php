
<div class="form-group mb-3">
    <label class="form-label">   {{ Form::label('Nombre') }}</label>
    <div>
        {{ Form::text('name', $tournament->name, ['class' => 'form-control' .
        ($errors->has('name') ? ' is-invalid' : ''), 'placeholder' => 'Nombre']) }}
        {!! $errors->first('name', '<div class="invalid-feedback">:message</div>') !!}
        <small class="form-hint">torneo <b>nombre</b> requerido.</small>
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
        <small class="form-hint">torneo <b>liga</b> requerido.</small>
    </div>
</div>

    <div class="form-footer">
        <div class="text-end">
            <div class="d-flex">
                <a href="{{ route('tournaments.index') }}" class="btn btn-danger">Cancelar</a>
                <button type="submit" class="btn btn-primary ms-auto ajax-submit">Guardar</button>
            </div>
        </div>
    </div>
