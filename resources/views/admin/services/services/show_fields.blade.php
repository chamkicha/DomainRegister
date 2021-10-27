<!-- Id Field -->
<div class="form-group">
    {!! Form::label('id', 'Id:') !!}
    <p>{!! $services->id !!}</p>
    <hr>
</div>

<!-- Name Field -->
<div class="form-group">
    {!! Form::label('name', 'Name:') !!}
    <p>{!! $services->name !!}</p>
    <hr>
</div>

<!-- Price Field -->
<div class="form-group">
    {!! Form::label('price', 'Price:') !!}
    <p>{!! $services->price !!}</p>
    <hr>
</div>

<!-- Created By Field -->
<div class="form-group">
    {!! Form::label('created_by', 'Created By:') !!}
    <p>{!! $services->created_by !!}</p>
    <hr>
</div>

<!-- Updated By Field -->
<div class="form-group">
    {!! Form::label('updated_by', 'Updated By:') !!}
    <p>{!! $services->updated_by !!}</p>
    <hr>
</div>

<!-- Deleted By Field -->
<div class="form-group">
    {!! Form::label('deleted_by', 'Deleted By:') !!}
    <p>{!! $services->deleted_by !!}</p>
    <hr>
</div>

