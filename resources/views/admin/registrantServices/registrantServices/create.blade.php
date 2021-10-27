@extends('admin/layouts/default')

@section('title')
RegistrantServices
@parent
@stop

@section('content')
@include('common.errors')
<section class="content-header">
    <h1>RegistrantServices</h1>
    <ol class="breadcrumb">
        <li>
            <a href="{{ route('admin.dashboard') }}"> <i class="livicon" data-name="home" data-size="16" data-color="#000"></i>
                Dashboard
            </a>
        </li>
        <li>RegistrantServices</li>
        <li class="active">Create RegistrantServices </li>
    </ol>
</section>
<section class="content">
<div class="container">
<div class="row">
    <div class="col-12">
     <div class="card border-primary">
            <div class="card-header bg-primary text-white">
                <h4 class="card-title"> <i class="livicon" data-name="user" data-size="16" data-loop="true" data-c="#fff" data-hc="white"></i>
                    Create New  RegistrantServices
                </h4></div>
            <br />
            <div class="card-body">
            {!! Form::open(['route' => 'admin.registrantServices.registrantServices.store']) !!}

                @include('admin.registrantServices.registrantServices.fields')

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
