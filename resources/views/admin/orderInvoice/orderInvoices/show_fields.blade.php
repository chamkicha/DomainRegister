<!-- Id Field -->
<div class="form-group">
    {!! Form::label('id', 'Id:') !!}
    <p>{!! $orderInvoice->id !!}</p>
    <hr>
</div>

<!-- Invoice No Field -->
<div class="form-group">
    {!! Form::label('invoice_no', 'Invoice No:') !!}
    <p>{!! $orderInvoice->invoice_no !!}</p>
    <hr>
</div>

<!-- Order No Field -->
<div class="form-group">
    {!! Form::label('order_no', 'Order No:') !!}
    <p>{!! $orderInvoice->order_no !!}</p>
    <hr>
</div>

<!-- Next Invoice Date Field -->
<div class="form-group">
    {!! Form::label('next_invoice_date', 'Next Invoice Date:') !!}
    <p>{!! $orderInvoice->next_invoice_date !!}</p>
    <hr>
</div>

<!-- Invoice Due Date Field -->
<div class="form-group">
    {!! Form::label('invoice_due_date', 'Invoice Due Date:') !!}
    <p>{!! $orderInvoice->invoice_due_date !!}</p>
    <hr>
</div>

