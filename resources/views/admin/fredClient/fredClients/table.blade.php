<div class="card-body table-responsive-lg table-responsive-sm table-responsive-md">
<table class="table table-striped table-bordered" id="fredClients-table" width="100%">
    <thead>
     <tr>
        <th>Host</th>
        <th>Port</th>
        <th>Path</th>
        <th>Transport</th>
        <th>E P P  U S E R</th>
        <th>E P P  P W D</th>
        <th >Action</th>
     </tr>
    </thead>
    <tbody>
    @foreach($fredClients as $fredClient)
        <tr>
            <td>{!! $fredClient->host !!}</td>
            <td>{!! $fredClient->port !!}</td>
            <td>{!! $fredClient->path !!}</td>
            <td>{!! $fredClient->transport !!}</td>
            <td>{!! $fredClient->e_p_p__u_s_e_r !!}</td>
            <td>{!! $fredClient->e_p_p__p_w_d !!}</td>
            <td>
                 <a href="{{ route('admin.fredClient.fredClients.show', collect($fredClient)->first() ) }}">
                     <i class="livicon" data-name="info" data-size="18" data-loop="true" data-c="#428BCA" data-hc="#428BCA" title="view fredClient"></i>
                 </a>
                 <a href="{{ route('admin.fredClient.fredClients.edit', collect($fredClient)->first() ) }}">
                     <i class="livicon" data-name="edit" data-size="18" data-loop="true" data-c="#428BCA" data-hc="#428BCA" title="edit fredClient"></i>
                 </a>
                 <a href="{{ route('admin.fredClient.fredClients.confirm-delete', collect($fredClient)->first() ) }}" data-toggle="modal" data-target="#delete_confirm" data-id="{{ route('admin.fredClient.fredClients.delete', collect($fredClient)->first() ) }}">
                     <i class="livicon" data-name="remove-alt" data-size="18" data-loop="true" data-c="#f56954" data-hc="#f56954" title="delete fredClient"></i>

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
        $('#fredClients-table').DataTable({
                      responsive: true,
                      pageLength: 10
                  });
                  $('#fredClients-table').on( 'page.dt', function () {
                     setTimeout(function(){
                           $('.livicon').updateLivicon();
                     },500);
                  } );
                  $('#fredClients-table').on( 'length.dt', function ( e, settings, len ) {
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
