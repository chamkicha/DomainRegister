<!-- Host Field -->
<div class="form-group col-sm-12">
    {!! Form::label('host', 'Host:') !!}
    {!! Form::text('host', null, ['class' => 'form-control']) !!}
</div>

<!-- Port Field -->
<div class="form-group col-sm-12">
    {!! Form::label('port', 'Port:') !!}
    {!! Form::text('port', null, ['class' => 'form-control']) !!}
</div>

<!-- Path Field -->
<div class="form-group col-sm-12">
    {!! Form::label('path', 'Path:') !!}
    {!! Form::text('path', null, ['class' => 'form-control']) !!}
</div>

<!-- Transport Field -->
<div class="form-group col-sm-12">
    {!! Form::label('transport', 'Transport:') !!}
    {!! Form::text('transport', null, ['class' => 'form-control']) !!}
</div>

<!-- E P P  U S E R Field -->
<div class="form-group col-sm-12">
    {!! Form::label('e_p_p__u_s_e_r', 'E P P  U S E R:') !!}
    {!! Form::text('e_p_p__u_s_e_r', null, ['class' => 'form-control']) !!}
</div>

<!-- E P P  P W D Field -->
<div class="form-group col-sm-12">
    {!! Form::label('e_p_p__p_w_d', 'E P P  P W D:') !!}
    {!! Form::text('e_p_p__p_w_d', null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12 text-center">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{!! route('admin.fredClient.fredClients.index') !!}" class="btn btn-secondary">Cancel</a>
</div>
