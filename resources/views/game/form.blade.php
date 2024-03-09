
<div class="form-group mb-3">
    <label class="form-label">   {{ Form::label('league_id') }}</label>
    <div>
        {{ Form::text('league_id', $game->league_id, ['class' => 'form-control' .
        ($errors->has('league_id') ? ' is-invalid' : ''), 'placeholder' => 'League Id']) }}
        {!! $errors->first('league_id', '<div class="invalid-feedback">:message</div>') !!}
        <small class="form-hint">game <b>league_id</b> instruction.</small>
    </div>
</div>
<div class="form-group mb-3">
    <label class="form-label">   {{ Form::label('tournament_id') }}</label>
    <div>
        {{ Form::text('tournament_id', $game->tournament_id, ['class' => 'form-control' .
        ($errors->has('tournament_id') ? ' is-invalid' : ''), 'placeholder' => 'Tournament Id']) }}
        {!! $errors->first('tournament_id', '<div class="invalid-feedback">:message</div>') !!}
        <small class="form-hint">game <b>tournament_id</b> instruction.</small>
    </div>
</div>
<div class="form-group mb-3">
    <label class="form-label">   {{ Form::label('home_team_id') }}</label>
    <div>
        {{ Form::text('home_team_id', $game->home_team_id, ['class' => 'form-control' .
        ($errors->has('home_team_id') ? ' is-invalid' : ''), 'placeholder' => 'Home Team Id']) }}
        {!! $errors->first('home_team_id', '<div class="invalid-feedback">:message</div>') !!}
        <small class="form-hint">game <b>home_team_id</b> instruction.</small>
    </div>
</div>
<div class="form-group mb-3">
    <label class="form-label">   {{ Form::label('away_team_id') }}</label>
    <div>
        {{ Form::text('away_team_id', $game->away_team_id, ['class' => 'form-control' .
        ($errors->has('away_team_id') ? ' is-invalid' : ''), 'placeholder' => 'Away Team Id']) }}
        {!! $errors->first('away_team_id', '<div class="invalid-feedback">:message</div>') !!}
        <small class="form-hint">game <b>away_team_id</b> instruction.</small>
    </div>
</div>
<div class="form-group mb-3">
    <label class="form-label">   {{ Form::label('field_id') }}</label>
    <div>
        {{ Form::text('field_id', $game->field_id, ['class' => 'form-control' .
        ($errors->has('field_id') ? ' is-invalid' : ''), 'placeholder' => 'Field Id']) }}
        {!! $errors->first('field_id', '<div class="invalid-feedback">:message</div>') !!}
        <small class="form-hint">game <b>field_id</b> instruction.</small>
    </div>
</div>
<div class="form-group mb-3">
    <label class="form-label">   {{ Form::label('referee_id') }}</label>
    <div>
        {{ Form::text('referee_id', $game->referee_id, ['class' => 'form-control' .
        ($errors->has('referee_id') ? ' is-invalid' : ''), 'placeholder' => 'Referee Id']) }}
        {!! $errors->first('referee_id', '<div class="invalid-feedback">:message</div>') !!}
        <small class="form-hint">game <b>referee_id</b> instruction.</small>
    </div>
</div>
<div class="form-group mb-3">
    <label class="form-label">   {{ Form::label('day') }}</label>
    <div>
        {{ Form::text('day', $game->day, ['class' => 'form-control' .
        ($errors->has('day') ? ' is-invalid' : ''), 'placeholder' => 'Day']) }}
        {!! $errors->first('day', '<div class="invalid-feedback">:message</div>') !!}
        <small class="form-hint">game <b>day</b> instruction.</small>
    </div>
</div>
<div class="form-group mb-3">
    <label class="form-label">   {{ Form::label('time') }}</label>
    <div>
        {{ Form::text('time', $game->time, ['class' => 'form-control' .
        ($errors->has('time') ? ' is-invalid' : ''), 'placeholder' => 'Time']) }}
        {!! $errors->first('time', '<div class="invalid-feedback">:message</div>') !!}
        <small class="form-hint">game <b>time</b> instruction.</small>
    </div>
</div>
<div class="form-group mb-3">
    <label class="form-label">   {{ Form::label('status') }}</label>
    <div>
        {{ Form::text('status', $game->status, ['class' => 'form-control' .
        ($errors->has('status') ? ' is-invalid' : ''), 'placeholder' => 'Status']) }}
        {!! $errors->first('status', '<div class="invalid-feedback">:message</div>') !!}
        <small class="form-hint">game <b>status</b> instruction.</small>
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
