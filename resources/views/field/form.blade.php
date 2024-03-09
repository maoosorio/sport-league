
<div class="form-group mb-3">
    <label class="form-label">   {{ Form::label('name') }}</label>
    <div>
        {{ Form::text('name', $field->name, ['class' => 'form-control' .
        ($errors->has('name') ? ' is-invalid' : ''), 'placeholder' => 'Name']) }}
        {!! $errors->first('name', '<div class="invalid-feedback">:message</div>') !!}
        <small class="form-hint">field <b>name</b> instruction.</small>
    </div>
</div>
<div class="form-group mb-3">
    <label class="form-label">   {{ Form::label('location') }}</label>
    <div>
        {{ Form::text('location', $field->location, ['class' => 'form-control' .
        ($errors->has('location') ? ' is-invalid' : ''), 'placeholder' => 'Location']) }}
        {!! $errors->first('location', '<div class="invalid-feedback">:message</div>') !!}
        <small class="form-hint">field <b>location</b> instruction.</small>
    </div>
</div>
<div class="form-group mb-3">
    <label class="form-label">   {{ Form::label('field_photo_path') }}</label>
    <div>
        {{ Form::text('field_photo_path', $field->field_photo_path, ['class' => 'form-control' .
        ($errors->has('field_photo_path') ? ' is-invalid' : ''), 'placeholder' => 'Field Photo Path']) }}
        {!! $errors->first('field_photo_path', '<div class="invalid-feedback">:message</div>') !!}
        <small class="form-hint">field <b>field_photo_path</b> instruction.</small>
    </div>
</div>
<div class="form-group mb-3">
    <label class="form-label">   {{ Form::label('status') }}</label>
    <div>
        {{ Form::text('status', $field->status, ['class' => 'form-control' .
        ($errors->has('status') ? ' is-invalid' : ''), 'placeholder' => 'Status']) }}
        {!! $errors->first('status', '<div class="invalid-feedback">:message</div>') !!}
        <small class="form-hint">field <b>status</b> instruction.</small>
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
