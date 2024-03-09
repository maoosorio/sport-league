
<div class="form-group mb-3">
    <label class="form-label">   {{ Form::label('name') }}</label>
    <div>
        {{ Form::text('name', $team->name, ['class' => 'form-control' .
        ($errors->has('name') ? ' is-invalid' : ''), 'placeholder' => 'Name']) }}
        {!! $errors->first('name', '<div class="invalid-feedback">:message</div>') !!}
        <small class="form-hint">team <b>name</b> instruction.</small>
    </div>
</div>
<div class="form-group mb-3">
    <label class="form-label">   {{ Form::label('owner') }}</label>
    <div>
        {{ Form::text('owner', $team->owner, ['class' => 'form-control' .
        ($errors->has('owner') ? ' is-invalid' : ''), 'placeholder' => 'Owner']) }}
        {!! $errors->first('owner', '<div class="invalid-feedback">:message</div>') !!}
        <small class="form-hint">team <b>owner</b> instruction.</small>
    </div>
</div>
<div class="form-group mb-3">
    <label class="form-label">   {{ Form::label('coach') }}</label>
    <div>
        {{ Form::text('coach', $team->coach, ['class' => 'form-control' .
        ($errors->has('coach') ? ' is-invalid' : ''), 'placeholder' => 'Coach']) }}
        {!! $errors->first('coach', '<div class="invalid-feedback">:message</div>') !!}
        <small class="form-hint">team <b>coach</b> instruction.</small>
    </div>
</div>
<div class="form-group mb-3">
    <label class="form-label">   {{ Form::label('foundation') }}</label>
    <div>
        {{ Form::text('foundation', $team->foundation, ['class' => 'form-control' .
        ($errors->has('foundation') ? ' is-invalid' : ''), 'placeholder' => 'Foundation']) }}
        {!! $errors->first('foundation', '<div class="invalid-feedback">:message</div>') !!}
        <small class="form-hint">team <b>foundation</b> instruction.</small>
    </div>
</div>
<div class="form-group mb-3">
    <label class="form-label">   {{ Form::label('team_photo_path') }}</label>
    <div>
        {{ Form::text('team_photo_path', $team->team_photo_path, ['class' => 'form-control' .
        ($errors->has('team_photo_path') ? ' is-invalid' : ''), 'placeholder' => 'Team Photo Path']) }}
        {!! $errors->first('team_photo_path', '<div class="invalid-feedback">:message</div>') !!}
        <small class="form-hint">team <b>team_photo_path</b> instruction.</small>
    </div>
</div>
<div class="form-group mb-3">
    <label class="form-label">   {{ Form::label('id_league') }}</label>
    <div>
        {{ Form::text('id_league', $team->id_league, ['class' => 'form-control' .
        ($errors->has('id_league') ? ' is-invalid' : ''), 'placeholder' => 'Id League']) }}
        {!! $errors->first('id_league', '<div class="invalid-feedback">:message</div>') !!}
        <small class="form-hint">team <b>id_league</b> instruction.</small>
    </div>
</div>
<div class="form-group mb-3">
    <label class="form-label">   {{ Form::label('status') }}</label>
    <div>
        {{ Form::text('status', $team->status, ['class' => 'form-control' .
        ($errors->has('status') ? ' is-invalid' : ''), 'placeholder' => 'Status']) }}
        {!! $errors->first('status', '<div class="invalid-feedback">:message</div>') !!}
        <small class="form-hint">team <b>status</b> instruction.</small>
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
