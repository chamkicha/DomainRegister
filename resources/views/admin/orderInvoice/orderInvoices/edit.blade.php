@extends('admin/layouts/default')

@section('title')
OrderInvoices
@parent
@stop
@section('content')
  @include('common.errors')
    <section class="content-header">
     <h1>OrderInvoices Edit</h1>
     <ol class="breadcrumb">
         <li>
             <a href="{{ route('admin.dashboard') }}"> <i class="livicon" data-name="home" data-size="16" data-color="#000"></i>
                 Dashboard
             </a>
         </li>
         <li>OrderInvoices</li>
         <li class="active">Edit OrderInvoice </li>
     </ol>
    </section>
    <section class="content">
    <div class="container">
      <div class="row">
             <div class="col-12">
              <div class="card border-primary">
                    <div class="card-header bg-primary text-white">
                        <h4 class="card-title"> <i class="livicon" data-name="user" data-size="16" data-loop="true" data-c="#fff" data-hc="white"></i>
                            Edit  OrderInvoice
                        </h4></div>
                    <br />
                <div class="card-body">
                {!! Form::model($orderInvoice, ['route' => ['admin.orderInvoice.orderInvoices.update', collect($orderInvoice)->first() ], 'method' => 'patch']) !!}

                @include('admin.orderInvoice.orderInvoices.fields')

                {!! Form::close() !!}
                </div>
              </div>
           </div>
        </div>
    </div>
   </section>
 @stop
@section('footer_scripts')
    <script type="text/javascript">
        $(document).ready(function() {
            $("form").submit(function() {
                $('input[type=submit]').attr('disabled', 'disabled');
                return true;
            });
        });
    </script>
@stop
