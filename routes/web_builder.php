<?php

/* custom routes generated by CRUD */



Route::group(array('prefix' => 'admin/services/','namespace' => 'Admin','middleware' => 'admin','as'=>'admin.services.'), function () {

Route::get('services', ['as'=> 'services.index', 'uses' => 'Services\ServicesController@index']);
Route::post('services', ['as'=> 'services.store', 'uses' => 'Services\ServicesController@store']);
Route::get('services/create', ['as'=> 'services.create', 'uses' => 'Services\ServicesController@create']);
Route::put('services/{services}', ['as'=> 'services.update', 'uses' => 'Services\ServicesController@update']);
Route::patch('services/{services}', ['as'=> 'services.update', 'uses' => 'Services\ServicesController@update']);
Route::get('services/{id}/delete', ['as' => 'services.delete', 'uses' => 'Services\ServicesController@getDelete']);
Route::get('services/{id}/confirm-delete', ['as' => 'services.confirm-delete', 'uses' => 'Services\ServicesController@getModalDelete']);
Route::get('services/{services}', ['as'=> 'services.show', 'uses' => 'Services\ServicesController@show']);
Route::get('services/{services}/edit', ['as'=> 'services.edit', 'uses' => 'Services\ServicesController@edit']);

});


Route::group(array('prefix' => 'admin/degistrantDetails/','namespace' => 'Admin','middleware' => 'admin','as'=>'admin.degistrantDetails.'), function () {

Route::get('registrantDetails', ['as'=> 'registrantDetails.index', 'uses' => 'Degistrantdetails\RegistrantDetailController@index']);
Route::post('registrantDetails', ['as'=> 'registrantDetails.store', 'uses' => 'Degistrantdetails\RegistrantDetailController@store']);
Route::get('registrantDetails/create', ['as'=> 'registrantDetails.create', 'uses' => 'Degistrantdetails\RegistrantDetailController@create']);
Route::put('registrantDetails/{registrantDetails}', ['as'=> 'registrantDetails.update', 'uses' => 'Degistrantdetails\RegistrantDetailController@update']);
Route::patch('registrantDetails/{registrantDetails}', ['as'=> 'registrantDetails.update', 'uses' => 'Degistrantdetails\RegistrantDetailController@update']);
Route::get('registrantDetails/{id}/delete', ['as' => 'registrantDetails.delete', 'uses' => 'Degistrantdetails\RegistrantDetailController@getDelete']);
Route::get('registrantDetails/{id}/confirm-delete', ['as' => 'registrantDetails.confirm-delete', 'uses' => 'Degistrantdetails\RegistrantDetailController@getModalDelete']);
Route::get('registrantDetails/{registrantDetails}', ['as'=> 'registrantDetails.show', 'uses' => 'Degistrantdetails\RegistrantDetailController@show']);
Route::get('registrantDetails/{registrantDetails}/edit', ['as'=> 'registrantDetails.edit', 'uses' => 'Degistrantdetails\RegistrantDetailController@edit']);

});


Route::group(array('prefix' => 'admin/administrativeDetails/','namespace' => 'Admin','middleware' => 'admin','as'=>'admin.administrativeDetails.'), function () {

Route::get('administrativeDetails', ['as'=> 'administrativeDetails.index', 'uses' => 'Administrativedetails\AdministrativeDetailsController@index']);
Route::post('administrativeDetails', ['as'=> 'administrativeDetails.store', 'uses' => 'Administrativedetails\AdministrativeDetailsController@store']);
Route::get('administrativeDetails/create', ['as'=> 'administrativeDetails.create', 'uses' => 'Administrativedetails\AdministrativeDetailsController@create']);
Route::put('administrativeDetails/{administrativeDetails}', ['as'=> 'administrativeDetails.update', 'uses' => 'Administrativedetails\AdministrativeDetailsController@update']);
Route::patch('administrativeDetails/{administrativeDetails}', ['as'=> 'administrativeDetails.update', 'uses' => 'Administrativedetails\AdministrativeDetailsController@update']);
Route::get('administrativeDetails/{id}/delete', ['as' => 'administrativeDetails.delete', 'uses' => 'Administrativedetails\AdministrativeDetailsController@getDelete']);
Route::get('administrativeDetails/{id}/confirm-delete', ['as' => 'administrativeDetails.confirm-delete', 'uses' => 'Administrativedetails\AdministrativeDetailsController@getModalDelete']);
Route::get('administrativeDetails/{administrativeDetails}', ['as'=> 'administrativeDetails.show', 'uses' => 'Administrativedetails\AdministrativeDetailsController@show']);
Route::get('administrativeDetails/{administrativeDetails}/edit', ['as'=> 'administrativeDetails.edit', 'uses' => 'Administrativedetails\AdministrativeDetailsController@edit']);

});


Route::group(array('prefix' => 'admin/registrantTechnicalDetails/','namespace' => 'Admin','middleware' => 'admin','as'=>'admin.registrantTechnicalDetails.'), function () {

Route::get('registrantTechnicalDetails', ['as'=> 'registrantTechnicalDetails.index', 'uses' => 'Registranttechnicaldetails\RegistrantTechnicalDetailController@index']);
Route::post('registrantTechnicalDetails', ['as'=> 'registrantTechnicalDetails.store', 'uses' => 'Registranttechnicaldetails\RegistrantTechnicalDetailController@store']);
Route::get('registrantTechnicalDetails/create', ['as'=> 'registrantTechnicalDetails.create', 'uses' => 'Registranttechnicaldetails\RegistrantTechnicalDetailController@create']);
Route::put('registrantTechnicalDetails/{registrantTechnicalDetails}', ['as'=> 'registrantTechnicalDetails.update', 'uses' => 'Registranttechnicaldetails\RegistrantTechnicalDetailController@update']);
Route::patch('registrantTechnicalDetails/{registrantTechnicalDetails}', ['as'=> 'registrantTechnicalDetails.update', 'uses' => 'Registranttechnicaldetails\RegistrantTechnicalDetailController@update']);
Route::get('registrantTechnicalDetails/{id}/delete', ['as' => 'registrantTechnicalDetails.delete', 'uses' => 'Registranttechnicaldetails\RegistrantTechnicalDetailController@getDelete']);
Route::get('registrantTechnicalDetails/{id}/confirm-delete', ['as' => 'registrantTechnicalDetails.confirm-delete', 'uses' => 'Registranttechnicaldetails\RegistrantTechnicalDetailController@getModalDelete']);
Route::get('registrantTechnicalDetails/{registrantTechnicalDetails}', ['as'=> 'registrantTechnicalDetails.show', 'uses' => 'Registranttechnicaldetails\RegistrantTechnicalDetailController@show']);
Route::get('registrantTechnicalDetails/{registrantTechnicalDetails}/edit', ['as'=> 'registrantTechnicalDetails.edit', 'uses' => 'Registranttechnicaldetails\RegistrantTechnicalDetailController@edit']);

});


Route::group(array('prefix' => 'admin/registrantBillingDetail/','namespace' => 'Admin','middleware' => 'admin','as'=>'admin.registrantBillingDetail.'), function () {

Route::get('registrantBillingDetails', ['as'=> 'registrantBillingDetails.index', 'uses' => 'Registrantbillingdetail\RegistrantBillingDetailsController@index']);
Route::post('registrantBillingDetails', ['as'=> 'registrantBillingDetails.store', 'uses' => 'Registrantbillingdetail\RegistrantBillingDetailsController@store']);
Route::get('registrantBillingDetails/create', ['as'=> 'registrantBillingDetails.create', 'uses' => 'Registrantbillingdetail\RegistrantBillingDetailsController@create']);
Route::put('registrantBillingDetails/{registrantBillingDetails}', ['as'=> 'registrantBillingDetails.update', 'uses' => 'Registrantbillingdetail\RegistrantBillingDetailsController@update']);
Route::patch('registrantBillingDetails/{registrantBillingDetails}', ['as'=> 'registrantBillingDetails.update', 'uses' => 'Registrantbillingdetail\RegistrantBillingDetailsController@update']);
Route::get('registrantBillingDetails/{id}/delete', ['as' => 'registrantBillingDetails.delete', 'uses' => 'Registrantbillingdetail\RegistrantBillingDetailsController@getDelete']);
Route::get('registrantBillingDetails/{id}/confirm-delete', ['as' => 'registrantBillingDetails.confirm-delete', 'uses' => 'Registrantbillingdetail\RegistrantBillingDetailsController@getModalDelete']);
Route::get('registrantBillingDetails/{registrantBillingDetails}', ['as'=> 'registrantBillingDetails.show', 'uses' => 'Registrantbillingdetail\RegistrantBillingDetailsController@show']);
Route::get('registrantBillingDetails/{registrantBillingDetails}/edit', ['as'=> 'registrantBillingDetails.edit', 'uses' => 'Registrantbillingdetail\RegistrantBillingDetailsController@edit']);

});


Route::group(array('prefix' => 'admin/client/','namespace' => 'Admin','middleware' => 'admin','as'=>'admin.client.'), function () {

Route::get('clients', ['as'=> 'clients.index', 'uses' => 'Client\ClientController@index']);
Route::post('clients', ['as'=> 'clients.store', 'uses' => 'Client\ClientController@store']);
Route::get('clients/create', ['as'=> 'clients.create', 'uses' => 'Client\ClientController@create']);
Route::put('clients/{clients}', ['as'=> 'clients.update', 'uses' => 'Client\ClientController@update']);
Route::patch('clients/{clients}', ['as'=> 'clients.update', 'uses' => 'Client\ClientController@update']);
Route::get('clients/{id}/delete', ['as' => 'clients.delete', 'uses' => 'Client\ClientController@getDelete']);
Route::get('clients/{id}/confirm-delete', ['as' => 'clients.confirm-delete', 'uses' => 'Client\ClientController@getModalDelete']);
Route::get('clients/{clients}', ['as'=> 'clients.show', 'uses' => 'Client\ClientController@show']);
Route::get('clients/{clients}/edit', ['as'=> 'clients.edit', 'uses' => 'Client\ClientController@edit']);

});


Route::group(array('prefix' => 'admin/clientsservice/','namespace' => 'Admin','middleware' => 'admin','as'=>'admin.clientsservice.'), function () {

Route::get('clientServices', ['as'=> 'clientServices.index', 'uses' => 'Clientsservice\ClientServiceController@index']);
Route::post('clientServices', ['as'=> 'clientServices.store', 'uses' => 'Clientsservice\ClientServiceController@store']);
Route::get('clientServices/create', ['as'=> 'clientServices.create', 'uses' => 'Clientsservice\ClientServiceController@create']);
Route::put('clientServices/{clientServices}', ['as'=> 'clientServices.update', 'uses' => 'Clientsservice\ClientServiceController@update']);
Route::patch('clientServices/{clientServices}', ['as'=> 'clientServices.update', 'uses' => 'Clientsservice\ClientServiceController@update']);
Route::get('clientServices/{id}/delete', ['as' => 'clientServices.delete', 'uses' => 'Clientsservice\ClientServiceController@getDelete']);
Route::get('clientServices/{id}/confirm-delete', ['as' => 'clientServices.confirm-delete', 'uses' => 'Clientsservice\ClientServiceController@getModalDelete']);
Route::get('clientServices/{clientServices}', ['as'=> 'clientServices.show', 'uses' => 'Clientsservice\ClientServiceController@show']);
Route::get('clientServices/{clientServices}/edit', ['as'=> 'clientServices.edit', 'uses' => 'Clientsservice\ClientServiceController@edit']);

});


Route::group(array('prefix' => 'admin/nameservers/','namespace' => 'Admin','middleware' => 'admin','as'=>'admin.nameservers.'), function () {

Route::get('nameservers', ['as'=> 'nameservers.index', 'uses' => 'Nameservers\NameserverController@index']);
Route::post('nameservers', ['as'=> 'nameservers.store', 'uses' => 'Nameservers\NameserverController@store']);
Route::get('nameservers/create', ['as'=> 'nameservers.create', 'uses' => 'Nameservers\NameserverController@create']);
Route::put('nameservers/{nameservers}', ['as'=> 'nameservers.update', 'uses' => 'Nameservers\NameserverController@update']);
Route::patch('nameservers/{nameservers}', ['as'=> 'nameservers.update', 'uses' => 'Nameservers\NameserverController@update']);
Route::get('nameservers/{id}/delete', ['as' => 'nameservers.delete', 'uses' => 'Nameservers\NameserverController@getDelete']);
Route::get('nameservers/{id}/confirm-delete', ['as' => 'nameservers.confirm-delete', 'uses' => 'Nameservers\NameserverController@getModalDelete']);
Route::get('nameservers/{nameservers}', ['as'=> 'nameservers.show', 'uses' => 'Nameservers\NameserverController@show']);
Route::get('nameservers/{nameservers}/edit', ['as'=> 'nameservers.edit', 'uses' => 'Nameservers\NameserverController@edit']);

});


Route::group(array('prefix' => 'admin/orderStatus/','namespace' => 'Admin','middleware' => 'admin','as'=>'admin.orderStatus.'), function () {

Route::get('orderStatuses', ['as'=> 'orderStatuses.index', 'uses' => 'Orderstatus\OrderStatusController@index']);
Route::post('orderStatuses', ['as'=> 'orderStatuses.store', 'uses' => 'Orderstatus\OrderStatusController@store']);
Route::get('orderStatuses/create', ['as'=> 'orderStatuses.create', 'uses' => 'Orderstatus\OrderStatusController@create']);
Route::put('orderStatuses/{orderStatuses}', ['as'=> 'orderStatuses.update', 'uses' => 'Orderstatus\OrderStatusController@update']);
Route::patch('orderStatuses/{orderStatuses}', ['as'=> 'orderStatuses.update', 'uses' => 'Orderstatus\OrderStatusController@update']);
Route::get('orderStatuses/{id}/delete', ['as' => 'orderStatuses.delete', 'uses' => 'Orderstatus\OrderStatusController@getDelete']);
Route::get('orderStatuses/{id}/confirm-delete', ['as' => 'orderStatuses.confirm-delete', 'uses' => 'Orderstatus\OrderStatusController@getModalDelete']);
Route::get('orderStatuses/{orderStatuses}', ['as'=> 'orderStatuses.show', 'uses' => 'Orderstatus\OrderStatusController@show']);
Route::get('orderStatuses/{orderStatuses}/edit', ['as'=> 'orderStatuses.edit', 'uses' => 'Orderstatus\OrderStatusController@edit']);

});


Route::group(array('prefix' => 'admin/orderNameServers/','namespace' => 'Admin','middleware' => 'admin','as'=>'admin.orderNameServers.'), function () {

Route::get('orderNameServers', ['as'=> 'orderNameServers.index', 'uses' => 'Ordernameservers\OrderNameServersController@index']);
Route::post('orderNameServers', ['as'=> 'orderNameServers.store', 'uses' => 'Ordernameservers\OrderNameServersController@store']);
Route::get('orderNameServers/create', ['as'=> 'orderNameServers.create', 'uses' => 'Ordernameservers\OrderNameServersController@create']);
Route::put('orderNameServers/{orderNameServers}', ['as'=> 'orderNameServers.update', 'uses' => 'Ordernameservers\OrderNameServersController@update']);
Route::patch('orderNameServers/{orderNameServers}', ['as'=> 'orderNameServers.update', 'uses' => 'Ordernameservers\OrderNameServersController@update']);
Route::get('orderNameServers/{id}/delete', ['as' => 'orderNameServers.delete', 'uses' => 'Ordernameservers\OrderNameServersController@getDelete']);
Route::get('orderNameServers/{id}/confirm-delete', ['as' => 'orderNameServers.confirm-delete', 'uses' => 'Ordernameservers\OrderNameServersController@getModalDelete']);
Route::get('orderNameServers/{orderNameServers}', ['as'=> 'orderNameServers.show', 'uses' => 'Ordernameservers\OrderNameServersController@show']);
Route::get('orderNameServers/{orderNameServers}/edit', ['as'=> 'orderNameServers.edit', 'uses' => 'Ordernameservers\OrderNameServersController@edit']);

});


Route::group(array('prefix' => 'admin/orderInvoice/','namespace' => 'Admin','middleware' => 'admin','as'=>'admin.orderInvoice.'), function () {

Route::get('orderInvoices', ['as'=> 'orderInvoices.index', 'uses' => 'Orderinvoice\OrderInvoiceController@index']);
Route::post('orderInvoices', ['as'=> 'orderInvoices.store', 'uses' => 'Orderinvoice\OrderInvoiceController@store']);
Route::get('orderInvoices/create', ['as'=> 'orderInvoices.create', 'uses' => 'Orderinvoice\OrderInvoiceController@create']);
Route::put('orderInvoices/{orderInvoices}', ['as'=> 'orderInvoices.update', 'uses' => 'Orderinvoice\OrderInvoiceController@update']);
Route::patch('orderInvoices/{orderInvoices}', ['as'=> 'orderInvoices.update', 'uses' => 'Orderinvoice\OrderInvoiceController@update']);
Route::get('orderInvoices/{id}/delete', ['as' => 'orderInvoices.delete', 'uses' => 'Orderinvoice\OrderInvoiceController@getDelete']);
Route::get('orderInvoices/{id}/confirm-delete', ['as' => 'orderInvoices.confirm-delete', 'uses' => 'Orderinvoice\OrderInvoiceController@getModalDelete']);
Route::get('orderInvoices/{orderInvoices}', ['as'=> 'orderInvoices.show', 'uses' => 'Orderinvoice\OrderInvoiceController@show']);
Route::get('orderInvoices/{orderInvoices}/edit', ['as'=> 'orderInvoices.edit', 'uses' => 'Orderinvoice\OrderInvoiceController@edit']);

});


Route::group(array('prefix' => 'admin/fredClient/','namespace' => 'Admin','middleware' => 'admin','as'=>'admin.fredClient.'), function () {

Route::get('fredClients', ['as'=> 'fredClients.index', 'uses' => 'Fredclient\FredClientController@index']);
Route::post('fredClients', ['as'=> 'fredClients.store', 'uses' => 'Fredclient\FredClientController@store']);
Route::get('fredClients/create', ['as'=> 'fredClients.create', 'uses' => 'Fredclient\FredClientController@create']);
Route::put('fredClients/{fredClients}', ['as'=> 'fredClients.update', 'uses' => 'Fredclient\FredClientController@update']);
Route::patch('fredClients/{fredClients}', ['as'=> 'fredClients.update', 'uses' => 'Fredclient\FredClientController@update']);
Route::get('fredClients/{id}/delete', ['as' => 'fredClients.delete', 'uses' => 'Fredclient\FredClientController@getDelete']);
Route::get('fredClients/{id}/confirm-delete', ['as' => 'fredClients.confirm-delete', 'uses' => 'Fredclient\FredClientController@getModalDelete']);
Route::get('fredClients/{fredClients}', ['as'=> 'fredClients.show', 'uses' => 'Fredclient\FredClientController@show']);
Route::get('fredClients/{fredClients}/edit', ['as'=> 'fredClients.edit', 'uses' => 'Fredclient\FredClientController@edit']);
Route::get('epplogin/{client_id}', ['as'=> 'fredClients.epplogin', 'uses' => 'Fredclient\FredClientController@epplogin']);

});
