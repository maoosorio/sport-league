
<div class="form-group mb-3">
    <label class="form-label">   {{ Form::label('game_id') }}</label>
    <div>
        {{ Form::text('game_id', $action->game_id, ['class' => 'form-control' .
        ($errors->has('game_id') ? ' is-invalid' : ''), 'placeholder' => 'Game Id']) }}
        {!! $errors->first('game_id', '<div class="invalid-feedback">:message</div>') !!}
        <small class="form-hint">action <b>game_id</b> instruction.</small>
    </div>
</div>
<div class="form-group mb-3">
    <label class="form-label">   {{ Form::label('team_id') }}</label>
    <div>
        {{ Form::text('team_id', $action->team_id, ['class' => 'form-control' .
        ($errors->has('team_id') ? ' is-invalid' : ''), 'placeholder' => 'Team Id']) }}
        {!! $errors->first('team_id', '<div class="invalid-feedback">:message</div>') !!}
        <small class="form-hint">action <b>team_id</b> instruction.</small>
    </div>
</div>
<div class="form-group mb-3">
    <label class="form-label">   {{ Form::label('player_id') }}</label>
    <div>
        {{ Form::text('player_id', $action->player_id, ['class' => 'form-control' .
        ($errors->has('player_id') ? ' is-invalid' : ''), 'placeholder' => 'Player Id']) }}
        {!! $errors->first('player_id', '<div class="invalid-feedback">:message</div>') !!}
        <small class="form-hint">action <b>player_id</b> instruction.</small>
    </div>
</div>
<div class="form-group mb-3">
    <label class="form-label">   {{ Form::label('action') }}</label>
    <div>
        {{ Form::text('action', $action->action, ['class' => 'form-control' .
        ($errors->has('action') ? ' is-invalid' : ''), 'placeholder' => 'Action']) }}
        {!! $errors->first('action', '<div class="invalid-feedback">:message</div>') !!}
        <small class="form-hint">action <b>action</b> instruction.</small>
    </div>
</div>
<div class="form-group mb-3">
    <label class="form-label">   {{ Form::label('value') }}</label>
    <div>
        {{ Form::text('value', $action->value, ['class' => 'form-control' .
        ($errors->has('value') ? ' is-invalid' : ''), 'placeholder' => 'Value']) }}
        {!! $errors->first('value', '<div class="invalid-feedback">:message</div>') !!}
        <small class="form-hint">action <b>value</b> instruction.</small>
    </div>
</div>
<div class="form-group mb-3">
    <label class="form-label">   {{ Form::label('time') }}</label>
    <div>
        {{ Form::text('time', $action->time, ['class' => 'form-control' .
        ($errors->has('time') ? ' is-invalid' : ''), 'placeholder' => 'Time']) }}
        {!! $errors->first('time', '<div class="invalid-feedback">:message</div>') !!}
        <small class="form-hint">action <b>time</b> instruction.</small>
    </div>
</div>
<div class="form-group mb-3">
    <label class="form-label">   {{ Form::label('status') }}</label>
    <div>
        {{ Form::text('status', $action->status, ['class' => 'form-control' .
        ($errors->has('status') ? ' is-invalid' : ''), 'placeholder' => 'Status']) }}
        {!! $errors->first('status', '<div class="invalid-feedback">:message</div>') !!}
        <small class="form-hint">action <b>status</b> instruction.</small>
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
