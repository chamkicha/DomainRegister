@section('css')
    <style>
    table, td, th {
    border: 1px solid black;
    }

    #table1 {
    border-collapse: separate;
    border-spacing: 15px;
    }

    #table2 {
    border-collapse: separate;
    border-spacing: 15px 50px;
    }
    </style>
@stop




<!--basic form starts-->
<div class="my-3">
    <div class="card " id="hidepanel1">
        <div class="card-header text-black ">
            <span>
                
                Registrant details <strong style="color: red;">*</strong>
            </span>
                    
        </div>
        <div class="card-body">
                <!-- CSRF Token -->
                    <!-- Name input-->
                    <div class="form-group">
                        
                        <table style="border-collapse: separate;border-spacing: 2px 2px;" class="form table_border" width="100%" border="0" cellspacing="2" cellpadding="3">
                            <tbody>
                                <tr>
                                    <td class="td_text_align">Date</td>
                                    <td class="table_allign">{!! $clientService->created_at !!}</td>
                                    <td width="15%" class="td_text_align">Payment Method</td>
                                    <td class="table_allign">Mail In Payment</td>
                                </tr>
                                <tr>
                                    <td width="15%" class="td_text_align">Order #</td>
                                    <td class="table_allign">NIDC_000{!! $clientService->service_id !!}</td>
                                    <td class="td_text_align">Amount</td>
                                    <td class="table_allign">TShs 25,000.00</td>
                                </tr>
                                <tr>
                                    <td rowspan="3" valign="top" class="td_text_align">Client</td>
                                    <td rowspan="3" valign="top" class="table_allign">
                                    
                                        <?php
                                        $client_details = DB::table('users')->where('id', $clientService->user_id)->first();
                                        ?>
                                    
                                        <?php
                                        if(!$client_details->country){
                                         $country ="";
                                        }else{
                                        $country = DB::table('countries')->where('sortname', $client_details->country)->first()->name;
                                        }
                                        ?>
                                        <a href="#"></a>
                                        <a href="#">{!! $client_details->first_name !!} {!! $client_details->last_name !!}</a>
                                            <br>
                                        {!! $client_details->address !!}<br>{!! $client_details->city !!},  P.O. Box {!! $client_details->postal !!}<br>{!! $country !!}</td>
                                    
                                    <?php
                                    $OrderInvoices = DB::table('OrderInvoices')->where('order_no', $clientService->service_id)->first();
                                    ?>
                                    
                                    <td class="td_text_align">Invoice #</td>
                                    <td class="table_allign"><a href="{{ route('admin.orderInvoice.orderInvoices.show', collect($OrderInvoices->id)->first() ) }}">
                                    {{$OrderInvoices->invoice_no}}</a></td>
                                </tr>
                                <tr>
                                    <td class="td_text_align">Status</td>
                                    <td class="table_allign">
                                    <?php
                                    $order_status = DB::table('OrderStatuss')->where('id', $clientService->status)->first()->name;
                                    print_r($order_status);
                                    ?></td>
                                </tr>
                                <tr>
                                    <td class="td_text_align">IP Address</td>
                                    <td class="table_allign">10.0.90.10 - <a href="https://extreme-ip-lookup.com/10.0.90.10" class="autoLinked">Lookup</a> | <a href="orders.php?orderip=10.0.90.10">Filter</a> | <a href="configbannedips.php?ip=10.0.90.10&amp;reason=Banned due to Orders&amp;year=2020&amp;month=12&amp;day=31&amp;hour=23&amp;minutes=59&amp;token=e38b3168656f10a79b5859a4c7122f2c3d5cb756">Ban</a></td>
                                </tr>
                                <tr>
                                    <td class="td_text_align">Promotion Code</td>
                                    <td class="table_allign"></td>
                                    <td class="td_text_align">Affiliate</td>
                                    <td class="table_allign">None - <a href="#" id="showaffassign">Manual Assign</a></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>

                    <div class="tablebg">
                        <table class="datatable table_border" width="100%" border="0" cellspacing="1" cellpadding="3">
                            <tbody>
                              <tr>
                                <th class="th_blue">Item</th>
                                <th class="th_blue">Description</th>
                                <th class="th_blue">Billing Cycle</th>
                                <th class="th_blue">Amount</th>
                                <th class="th_blue">Status</th>
                                <th class="th_blue">Payment Status</th>
                              </tr>
                              <tr>
                                <td align="left"><a href="#"><b>Domain</b></a></td>
                                <td>Registration - {!! $clientService->domain !!}<br></td>
                                <td>{!! $clientService->duration !!} Year</td>
                                <td>TShs 25,000.00</td>
                                <td>
                                    <?php
                                    $order_status = DB::table('OrderStatuss')->where('id', $clientService->status)->first()->name;
                                    print_r($order_status);
                                    ?>
                                </td>
                                <td><b><span class="textred">Complete</span></b></td>
                              </tr>
                              <tr>
                                <th colspan="3" style="text-align:right;" class="th_blue">Total Due:&nbsp;</th>
                                <th class="th_blue">TShs 25,000.00</th>
                                <th colspan="2" class="th_blue"></th>
                              </tr>
                            </tbody>
                        </table>
                    </div>

                    <div>
                        <b>Nameservers</b>
                        <p>
                            <?php
                            $OrderNameServers = DB::table('OrderNameServers')->where('orde_no', $clientService->service_id)->get();
                            ?>
                            @foreach($OrderNameServers as $OrderNameServer)
                            Nameserver {{$loop->iteration}}: {{ $OrderNameServer->name_server }}<br>
                            
                            @endforeach
                        </p>
                    </div>

                    <div class="new_button">
                        
                    <a class="btn btn-success" href="{{ route('admin.clientsservice.clientServices.confirm-delete', collect($clientService->id)->first() ) }}" data-toggle="modal" data-target="#delete_confirm" data-id="{{ route('admin.clientsservice.clientServices.delete', collect($clientService->id)->first() ) }}">
                        Send To TCRA
                    </a>
                        
                    <a class="btn btn-default" href="{{ route('admin.fredClient.fredClients.epplogin', collect($clientService->user_id)->first() ) }}">
                        User Info
                    </a>
                    <input type="button" value="Cancel &amp; Refund" onclick="cancelRefundOrder()" class="btn btn-default">
                    <input type="button" value="Set as Fraud" onclick="fraudOrder()" class="btn btn-default">
                    <input type="button" value="Set Back to Pending" onclick="pendingOrder()" class="btn btn-default">
                        
                    <a class="btn btn-danger" href="{{ route('admin.clientsservice.clientServices.confirm-delete', collect($clientService->id)->first() ) }}" data-toggle="modal" data-target="#delete_confirm" data-id="{{ route('admin.clientsservice.clientServices.delete', collect($clientService->id)->first() ) }}">
                        Delete Order
                    </a>
                    </div>
                    
                    
        </div>
    </div>
</div>





