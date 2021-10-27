<!-- Name Server Field -->
<div class="form-group col-sm-12">
    {!! Form::label('name_server', 'Name Server:') !!}
    {!! Form::text('name_server', null, ['class' => 'form-control']) !!}
</div>

<!-- Orde No Field -->
<div class="form-group col-sm-12">
    {!! Form::label('orde_no', 'Orde No:') !!}
    {!! Form::text('orde_no', null, ['class' => 'form-control']) !!}
</div>

<!-- User Id Field -->
<div class="form-group col-sm-12">
    {!! Form::label('user_id', 'User Id:') !!}
    {!! Form::text('user_id', null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12 text-center">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{!! route('admin.orderNameServers.orderNameServers.index') !!}" class="btn btn-secondary">Cancel</a>
</div>
