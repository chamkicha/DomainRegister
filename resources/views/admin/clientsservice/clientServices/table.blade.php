<div class="card-body table-responsive-lg table-responsive-sm table-responsive-md">
<table class="table table-striped table-bordered" id="clientServices-table" width="100%">
    <thead>
     <tr>
        <th>User Id</th>
        <th>Service Id</th>
        <th>Payment Mode</th>
        <th>Duration</th>
        <th>Status</th>
        <th>Created By</th>
        <th>Updated By</th>
        <th>Deleted By</th>
        <th>Domain</th>
        <th >Action</th>
     </tr>
    </thead>
    <tbody>
    @foreach($clientServices as $clientService)
        <tr>
            <td>{!! $clientService->user_id !!}</td>
            <td>{!! $clientService->service_id !!}</td>
            <td>{!! $clientService->payment_mode !!}</td>
            <td>{!! $clientService->duration !!}</td>
            <td>{!! $clientService->status !!}</td>
            <td>{!! $clientService->created_by !!}</td>
            <td>{!! $clientService->updated_by !!}</td>
            <td>{!! $clientService->deleted_by !!}</td>
            <td>{!! $clientService->domain !!}</td>
            <td>
                 <a href="{{ route('admin.clientsservice.clientServices.show', collect($clientService)->first() ) }}">
                     <i class="livicon" data-name="info" data-size="18" data-loop="true" data-c="#428BCA" data-hc="#428BCA" title="view clientService"></i>
                 </a>
                 <a href="{{ route('admin.clientsservice.clientServices.edit', collect($clientService)->first() ) }}">
                     <i class="livicon" data-name="edit" data-size="18" data-loop="true" data-c="#428BCA" data-hc="#428BCA" title="edit clientService"></i>
                 </a>
                 <a href="{{ route('admin.clientsservice.clientServices.confirm-delete', collect($clientService)->first() ) }}" data-toggle="modal" data-target="#delete_confirm" data-id="{{ route('admin.clientsservice.clientServices.delete', collect($clientService)->first() ) }}">
                     <i class="livicon" data-name="remove-alt" data-size="18" data-loop="true" data-c="#f56954" data-hc="#f56954" title="delete clientService"></i>

                 </a>
            </td>
        </tr>
    @endforeach
    </tbody>
</table>
</div>
@section('footer_scripts')

    <div class="modal fade" id="delete_confirm" tabindex="-1" role="dialog" aria-labelledby="user_delete_confirm_title" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
            <div class="modal-header">
                                <h4 class="modal-title" id="deleteLabel">Delete Item</h4>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                            </div>
                            <div class="modal-body">
                                Are you sure to delete this Item? This operation is irreversible.
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                                <a  type="button" class="btn btn-danger Remove_square">Delete</a>
                            </div>
            </div>
        </div>
    </div>
    <script>$(function () {$('body').on('hidden.bs.modal', '.modal', function () {$(this).removeData('bs.modal');});});</script>
<link rel="stylesheet" type="text/css" href="{{ asset('vendors/datatables/css/buttons.bootstrap4.css') }}"/>
<link rel="stylesheet" type="text/css" href="{{ asset('vendors/datatables/css/dataTables.bootstrap4.css') }}"/>
 <link rel="stylesheet" type="text/css" href="{{ asset('vendors/datatables/css/buttons.bootstrap4.css') }}">
<script type="text/javascript" src="{{ asset('vendors/datatables/js/jquery.dataTables.js') }}" ></script>
 <script type="text/javascript" src="{{ asset('vendors/datatables/js/dataTables.bootstrap4.js') }}" ></script>

    <script>
        $('#clientServices-table').DataTable({
                      responsive: true,
                      pageLength: 10
                  });
                  $('#clientServices-table').on( 'page.dt', function () {
                     setTimeout(function(){
                           $('.livicon').updateLivicon();
                     },500);
                  } );
                  $('#clientServices-table').on( 'length.dt', function ( e, settings, len ) {
                     setTimeout(function(){
                            $('.livicon').updateLivicon();
                     },500);
                  } );

                  $('#delete_confirm').on('show.bs.modal', function (event) {
                      var button = $(event.relatedTarget)
                       var $recipient = button.data('id');
                      var modal = $(this);
                      modal.find('.modal-footer a').prop("href",$recipient);
                  })

       </script>

@stop
