<div class="card-body table-responsive-lg table-responsive-sm table-responsive-md">
<table class="table table-striped table-bordered" id="administrativeDetails-table" width="100%">
    <thead>
     <tr>
        <th>User Id</th>
        <th>Mobile</th>
        <th>Email</th>
        <th>Fax</th>
        <th>Physical Adress</th>
        <th>Postal Adress</th>
        <th>City</th>
        <th>Country</th>
        <th>Created By</th>
        <th>Updated By</th>
        <th >Action</th>
     </tr>
    </thead>
    <tbody>
    @foreach($administrativeDetails as $administrativeDetails)
        <tr>
            <td>{!! $administrativeDetails->user_id !!}</td>
            <td>{!! $administrativeDetails->mobile !!}</td>
            <td>{!! $administrativeDetails->email !!}</td>
            <td>{!! $administrativeDetails->fax !!}</td>
            <td>{!! $administrativeDetails->physical_adress !!}</td>
            <td>{!! $administrativeDetails->postal_adress !!}</td>
            <td>{!! $administrativeDetails->city !!}</td>
            <td>{!! $administrativeDetails->country !!}</td>
            <td>{!! $administrativeDetails->created_by !!}</td>
            <td>{!! $administrativeDetails->updated_by !!}</td>
            <td>
                 <a href="{{ route('admin.administrativeDetails.administrativeDetails.show', collect($administrativeDetails)->first() ) }}">
                     <i class="livicon" data-name="info" data-size="18" data-loop="true" data-c="#428BCA" data-hc="#428BCA" title="view administrativeDetails"></i>
                 </a>
                 <a href="{{ route('admin.administrativeDetails.administrativeDetails.edit', collect($administrativeDetails)->first() ) }}">
                     <i class="livicon" data-name="edit" data-size="18" data-loop="true" data-c="#428BCA" data-hc="#428BCA" title="edit administrativeDetails"></i>
                 </a>
                 <a href="{{ route('admin.administrativeDetails.administrativeDetails.confirm-delete', collect($administrativeDetails)->first() ) }}" data-toggle="modal" data-target="#delete_confirm" data-id="{{ route('admin.administrativeDetails.administrativeDetails.delete', collect($administrativeDetails)->first() ) }}">
                     <i class="livicon" data-name="remove-alt" data-size="18" data-loop="true" data-c="#f56954" data-hc="#f56954" title="delete administrativeDetails"></i>

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
        $('#administrativeDetails-table').DataTable({
                      responsive: true,
                      pageLength: 10
                  });
                  $('#administrativeDetails-table').on( 'page.dt', function () {
                     setTimeout(function(){
                           $('.livicon').updateLivicon();
                     },500);
                  } );
                  $('#administrativeDetails-table').on( 'length.dt', function ( e, settings, len ) {
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
