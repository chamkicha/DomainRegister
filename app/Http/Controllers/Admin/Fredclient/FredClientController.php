<?php

namespace App\Http\Controllers\Admin\Fredclient;

use App\Http\Requests;
use App\Http\Requests\Fredclient\CreateFredClientRequest;
use App\Http\Requests\Fredclient\UpdateFredClientRequest;
use App\Repositories\Fredclient\FredClientRepository;
use App\Http\Controllers\AppBaseController as InfyOmBaseController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Lang;
use App\Models\Fredclient\FredClient;
use Flash;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;
use App\Http\Controllers\Admin\Fredclient\MyfredEPP;

class FredClientController extends InfyOmBaseController
{
    /** @var  FredClientRepository */
    private $fredClientRepository;
    private $myfredEPP;

    public function __construct(FredClientRepository $fredClientRepo)
    {
        $this->fredClientRepository = $fredClientRepo;
        $this->myfredEPP = new MyfredEPP();
    }

    /**
     * Display a listing of the FredClient.
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {

        $this->fredClientRepository->pushCriteria(new RequestCriteria($request));
        $fredClients = $this->fredClientRepository->all();
        return view('admin.fredClient.fredClients.index')
            ->with('fredClients', $fredClients);
    }

    /**
     * Show the form for creating a new FredClient.
     *
     * @return Response
     */
    public function create()
    {
        return view('admin.fredClient.fredClients.create');
    }

    /**
     * Store a newly created FredClient in storage.
     *
     * @param CreateFredClientRequest $request
     *
     * @return Response
     */
    public function store(CreateFredClientRequest $request)
    {
        $input = $request->all();

        $fredClient = $this->fredClientRepository->create($input);

        Flash::success('FredClient saved successfully.');

        return redirect(route('admin.fredClient.fredClients.index'));
    }

    /**
     * Display the specified FredClient.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $fredClient = $this->fredClientRepository->findWithoutFail($id);

        if (empty($fredClient)) {
            Flash::error('FredClient not found');

            return redirect(route('fredClients.index'));
        }

        return view('admin.fredClient.fredClients.show')->with('fredClient', $fredClient);
    }

    /**
     * Show the form for editing the specified FredClient.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $fredClient = $this->fredClientRepository->findWithoutFail($id);

        if (empty($fredClient)) {
            Flash::error('FredClient not found');

            return redirect(route('fredClients.index'));
        }

        return view('admin.fredClient.fredClients.edit')->with('fredClient', $fredClient);
    }

    /**
     * Update the specified FredClient in storage.
     *
     * @param  int              $id
     * @param UpdateFredClientRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateFredClientRequest $request)
    {
        $fredClient = $this->fredClientRepository->findWithoutFail($id);

        

        if (empty($fredClient)) {
            Flash::error('FredClient not found');

            return redirect(route('fredClients.index'));
        }

        $fredClient = $this->fredClientRepository->update($request->all(), $id);

        Flash::success('FredClient updated successfully.');

        return redirect(route('admin.fredClient.fredClients.index'));
    }

    /**
     * Remove the specified FredClient from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
      public function getModalDelete($id = null)
      {
          $error = '';
          $model = '';
          $confirm_route =  route('admin.fredClient.fredClients.delete',['id'=>$id]);
          return View('admin.layouts/modal_confirmation', compact('error','model', 'confirm_route'));

      }

       public function getDelete($id = null)
       {
           $sample = FredClient::destroy($id);

           // Redirect to the group management page
           return redirect(route('admin.fredClient.fredClients.index'))->with('success', Lang::get('message.success.delete'));

       }

       public function epplogin($client_id){
           $login = $this->myfredEPP->domainList();
           dd($login);
       }

}
