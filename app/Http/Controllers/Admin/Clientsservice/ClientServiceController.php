<?php

namespace App\Http\Controllers\Admin\Clientsservice;

use App\Http\Requests;
use App\Http\Requests\Clientsservice\CreateClientServiceRequest;
use App\Http\Requests\Clientsservice\UpdateClientServiceRequest;
use App\Repositories\Clientsservice\ClientServiceRepository;
use App\Http\Controllers\AppBaseController as InfyOmBaseController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Lang;
use App\Models\Clientsservice\ClientService;
use Flash;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;
use DB;
use Cartalyst\Sentinel\Laravel\Facades\Sentinel;

class ClientServiceController extends InfyOmBaseController
{
    /** @var  ClientServiceRepository */
    private $clientServiceRepository;

    public function __construct(ClientServiceRepository $clientServiceRepo)
    {
        $this->clientServiceRepository = $clientServiceRepo;
    }

    /**
     * Display a listing of the ClientService.
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {

        $this->clientServiceRepository->pushCriteria(new RequestCriteria($request));
        $clientServices = $this->clientServiceRepository->all();
        return view('admin.clientsservice.clientServices.index')
            ->with('clientServices', $clientServices);
    }

    /**
     * Show the form for creating a new ClientService.
     *
     * @return Response
     */
    public function create()
    {
        $registrants = DB::table('role_users')->where('role_id',3)->get();
        $nameserver = DB::table('nameservers')->get();
        return view('admin.clientsservice.clientServices.create')
                    ->with('nameserver', $nameserver)
                    ->with('registrants', $registrants);
    }

    /**
     * Store a newly created ClientService in storage.
     *
     * @param CreateClientServiceRequest $request
     *
     * @return Response
     */
    public function store(CreateClientServiceRequest $request)
    {
       // dd($request);
       
        // Same Administrative as Registrant Contact
        if($request->same_as_registrant == 1){

            $this->validate($request, [
                'registrants'  => 'required',
                'domain_name'  => 'required',
                'registration_period'  => 'required',
                'nameserver'  => 'required',
            ]);
        $created_by = Sentinel::getUser()->id;
        $created_at = now(); 
        $registrants = DB::table('users')->where('id', $request->registrants)->first();
        $administrative_details = DB::table('administrative_details')
                                ->insert([
                                    'user_id' => $registrants->id,
                                    'firts_name' => $registrants->first_name,
                                    'last_name' => $registrants->last_name,
                                    'mobile' => $registrants->mobile,
                                    'email' => $registrants->email,
                                    'physical_adress' => $registrants->address,
                                    'postal_adress' => $registrants->postal,
                                    'city' => $registrants->city,
                                    'country' => $registrants->country,
                                    'created_at' => $created_at,
                                    'created_by' => $created_by,
                                ]);

        $ClientServices_create = $this->ClientServices_create($request);

        $service_id = DB::table('ClientServices')->where('service_id',$ClientServices_create)->first()->id;

        return redirect(route('admin.clientsservice.clientServices.show', [$service_id]))->with('success', 'Order Created successfully');

        }else{

            $this->validate($request, [
                'registrants'  => 'required',
                'domain_name'  => 'required',
                'registration_period'  => 'required',
                'nameserver'  => 'required',
            ]);
//dd($request);
            $created_at = now(); 
            $created_by=Sentinel::getUser()->id;
            $administrative_details = DB::table('administrative_details')
                                    ->insert([
                                        'user_id' => $request->registrants,
                                        'firts_name' => $request->administrative_firstName,
                                        'last_name' => $request->administrative_lastName,
                                        'mobile' => $request->administrative_phone_number,
                                        'email' => $request->administrative_email,
                                        'physical_adress' => $request->administrative_street_address,
                                        'postal_adress' => $request->administrative_postal_address,
                                        'city' => $request->administrative_city,
                                        'country' => $request->administrative_country,
                                        'state' => $request->administrative_state,
                                        'created_at' => $created_at,
                                        'created_by' => $created_by,

                                    ]);

           $ClientServices_create = $this->ClientServices_create($request);

           $service_id = DB::table('ClientServices')->where('service_id',$ClientServices_create)->first()->id;

           return redirect(route('admin.clientsservice.clientServices.show', [$service_id]))->with('success', 'Order Created successfully');


        }

    }

    /**
     * Display the specified ClientService.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $clientService = $this->clientServiceRepository->findWithoutFail($id);

        if (empty($clientService)) {
            Flash::error('ClientService not found');

            return redirect(route('clientServices.index'));
        }

        return view('admin.clientsservice.clientServices.show')->with('clientService', $clientService);
    }

    /**
     * Show the form for editing the specified ClientService.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $clientService = $this->clientServiceRepository->findWithoutFail($id);

        if (empty($clientService)) {
            Flash::error('ClientService not found');

            return redirect(route('clientServices.index'));
        }

        return view('admin.clientsservice.clientServices.edit')->with('clientService', $clientService);
    }

    /**
     * Update the specified ClientService in storage.
     *
     * @param  int              $id
     * @param UpdateClientServiceRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateClientServiceRequest $request)
    {
        $clientService = $this->clientServiceRepository->findWithoutFail($id);

        

        if (empty($clientService)) {
            Flash::error('ClientService not found');

            return redirect(route('clientServices.index'));
        }

        $clientService = $this->clientServiceRepository->update($request->all(), $id);

        Flash::success('ClientService updated successfully.');

        return redirect(route('admin.clientsservice.clientServices.index'));
    }

    /**
     * Remove the specified ClientService from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
      public function getModalDelete($id = null)
      {
          $error = '';
          $model = '';
          $confirm_route =  route('admin.clientsservice.clientServices.delete',['id'=>$id]);
          return View('admin.layouts/modal_confirmation', compact('error','model', 'confirm_route'));

      }

       public function getDelete($id = null)
       {
           $sample = ClientService::destroy($id);

           // Redirect to the group management page
           return redirect(route('admin.clientsservice.clientServices.index'))->with('success', Lang::get('message.success.delete'));

       }

       public function ClientServices_create($request){

        $service_id = DB::table('ClientServices')->orderBy('service_id', 'desc')->first()->service_id;
        if(is_null($service_id)){
            $service_id = 1000;
            }else{
                $service_id = $service_id + 1;
            }

        $created_by = Sentinel::getUser()->id;
        $created_at = now();
        $administrative_details = DB::table('ClientServices')
                                ->insert([
                                    'user_id' => $request->registrants,
                                    'service_id' => $service_id,
                                    'duration' => $request->registration_period,
                                    'status' => 1,
                                    'domain' => $request->domain_name,
                                    'created_at' => $created_at,
                                    'created_by' => $created_by,
                                    
                                ]);
        
        $OrderNameServers = $this->OrderNameServers($request->nameserver, $service_id, $request->registrants);
        $OrderInvoices = $this->OrderInvoices($request , $service_id);

        return $service_id;

       }

       public function OrderNameServers($nameservers , $orde_no , $user_id){

            foreach($nameservers as $nameserver){
                if(!is_null($nameserver)){
                    $OrderNameServers = DB::table('OrderNameServers')
                                        ->insert([
                                            'name_server' => $nameserver,
                                            'orde_no' => $orde_no,
                                            'user_id' => $user_id,
                                            
                                        ]);

                }

            }
       }

       public function OrderInvoices($request , $order_no){

        $invoice_no = DB::table('OrderInvoices')->orderBy('invoice_no', 'desc')->first()->invoice_no;
        if(is_null($invoice_no)){
            $invoice_no = 1000;
            }else{
                $invoice_no = $invoice_no + 1;
            }
            $created_at = now();
            $OrderInvoices = DB::table('OrderInvoices')
                                ->insert([
                                    'invoice_no' => $invoice_no,
                                    'order_no' => $order_no,
                                    'created_at' => $created_at,
                                    
                                ]);

       }

}
