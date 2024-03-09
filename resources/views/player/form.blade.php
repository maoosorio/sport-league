
<div class="form-group mb-3">
    <label class="form-label">   {{ Form::label('name') }}</label>
    <div>
        {{ Form::text('name', $player->name, ['class' => 'form-control' .
        ($errors->has('name') ? ' is-invalid' : ''), 'placeholder' => 'Name']) }}
        {!! $errors->first('name', '<div class="invalid-feedback">:message</div>') !!}
        <small class="form-hint">player <b>name</b> instruction.</small>
    </div>
</div>
<div class="form-group mb-3">
    <label class="form-label">   {{ Form::label('position') }}</label>
    <div>
        {{ Form::text('position', $player->position, ['class' => 'form-control' .
        ($errors->has('position') ? ' is-invalid' : ''), 'placeholder' => 'Position']) }}
        {!! $errors->first('position', '<div class="invalid-feedback">:message</div>') !!}
        <small class="form-hint">player <b>position</b> instruction.</small>
    </div>
</div>
<div class="form-group mb-3">
    <label class="form-label">   {{ Form::label('number') }}</label>
    <div>
        {{ Form::text('number', $player->number, ['class' => 'form-control' .
        ($errors->has('number') ? ' is-invalid' : ''), 'placeholder' => 'Number']) }}
        {!! $errors->first('number', '<div class="invalid-feedback">:message</div>') !!}
        <small class="form-hint">player <b>number</b> instruction.</small>
    </div>
</div>
<div class="form-group mb-3">
    <label class="form-label">   {{ Form::label('birthdate') }}</label>
    <div>
        {{ Form::text('birthdate', $player->birthdate, ['class' => 'form-control' .
        ($errors->has('birthdate') ? ' is-invalid' : ''), 'placeholder' => 'Birthdate']) }}
        {!! $errors->first('birthdate', '<div class="invalid-feedback">:message</div>') !!}
        <small class="form-hint">player <b>birthdate</b> instruction.</small>
    </div>
</div>
<div class="form-group mb-3">
    <label class="form-label">   {{ Form::label('player_photo_path') }}</label>
    <div>
        {{ Form::text('player_photo_path', $player->player_photo_path, ['class' => 'form-control' .
        ($errors->has('player_photo_path') ? ' is-invalid' : ''), 'placeholder' => 'Player Photo Path']) }}
        {!! $errors->first('player_photo_path', '<div class="invalid-feedback">:message</div>') !!}
        <small class="form-hint">player <b>player_photo_path</b> instruction.</small>
    </div>
</div>
<div class="form-group mb-3">
    <label class="form-label">   {{ Form::label('status') }}</label>
    <div>
        {{ Form::text('status', $player->status, ['class' => 'form-control' .
        ($errors->has('status') ? ' is-invalid' : ''), 'placeholder' => 'Status']) }}
        {!! $errors->first('status', '<div class="invalid-feedback">:message</div>') !!}
        <small class="form-hint">player <b>status</b> instruction.</small>
    </div>
</div>

    <div class="form-footer">
        <div class="text-end">
            <div class="d-flex">
                <a href="#" class="btn btn-danger">Cancel</a>
                <button type="submit" class="btn btn-primary ms-auto ajax-submit">Submit</button>
            </div>
        </div>
    </div>
