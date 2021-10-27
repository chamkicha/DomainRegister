<!-- Invoice No Field -->
<div class="form-group col-sm-12">
    {!! Form::label('invoice_no', 'Invoice No:') !!}
    {!! Form::text('invoice_no', null, ['class' => 'form-control']) !!}
</div>

<!-- Order No Field -->
<div class="form-group col-sm-12">
    {!! Form::label('order_no', 'Order No:') !!}
    {!! Form::text('order_no', null, ['class' => 'form-control']) !!}
</div>

<!-- Next Invoice Date Field -->
<div class="form-group col-sm-12">
    {!! Form::label('next_invoice_date', 'Next Invoice Date:') !!}
    {!! Form::text('next_invoice_date', null, ['class' => 'form-control']) !!}
</div>

<!-- Invoice Due Date Field -->
<div class="form-group col-sm-12">
    {!! Form::label('invoice_due_date', 'Invoice Due Date:') !!}
    {!! Form::text('invoice_due_date', null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12 text-center">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{!! route('admin.orderInvoice.orderInvoices.index') !!}" class="btn btn-secondary">Cancel</a>
</div>
