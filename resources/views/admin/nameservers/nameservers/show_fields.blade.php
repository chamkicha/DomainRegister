<!-- Id Field -->
<div class="form-group">
    {!! Form::label('id', 'Id:') !!}
    <p>{!! $nameserver->id !!}</p>
    <hr>
</div>

<!-- Name Field -->
<div class="form-group">
    {!! Form::label('name', 'Name:') !!}
    <p>{!! $nameserver->name !!}</p>
    <hr>
</div>

<!-- Created By Field -->
<div class="form-group">
    {!! Form::label('created_by', 'Created By:') !!}
    <p>{!! $nameserver->created_by !!}</p>
    <hr>
</div>

<!-- Updated By Field -->
<div class="form-group">
    {!! Form::label('updated_by', 'Updated By:') !!}
    <p>{!! $nameserver->updated_by !!}</p>
    <hr>
</div>

<!-- Deleted By Field -->
<div class="form-group">
    {!! Form::label('deleted_by', 'Deleted By:') !!}
    <p>{!! $nameserver->deleted_by !!}</p>
    <hr>
</div>

