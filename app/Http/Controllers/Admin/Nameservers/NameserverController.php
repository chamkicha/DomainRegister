<?php

namespace App\Http\Controllers\Admin\Nameservers;

use App\Http\Requests;
use App\Http\Requests\Nameservers\CreateNameserverRequest;
use App\Http\Requests\Nameservers\UpdateNameserverRequest;
use App\Repositories\Nameservers\NameserverRepository;
use App\Http\Controllers\AppBaseController as InfyOmBaseController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Lang;
use App\Models\Nameservers\Nameserver;
use Flash;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;

class NameserverController extends InfyOmBaseController
{
    /** @var  NameserverRepository */
    private $nameserverRepository;

    public function __construct(NameserverRepository $nameserverRepo)
    {
        $this->nameserverRepository = $nameserverRepo;
    }

    /**
     * Display a listing of the Nameserver.
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {

        $this->nameserverRepository->pushCriteria(new RequestCriteria($request));
        $nameservers = $this->nameserverRepository->all();
        return view('admin.nameservers.nameservers.index')
            ->with('nameservers', $nameservers);
    }

    /**
     * Show the form for creating a new Nameserver.
     *
     * @return Response
     */
    public function create()
    {
        return view('admin.nameservers.nameservers.create');
    }

    /**
     * Store a newly created Nameserver in storage.
     *
     * @param CreateNameserverRequest $request
     *
     * @return Response
     */
    public function store(CreateNameserverRequest $request)
    {
        $input = $request->all();

        $nameserver = $this->nameserverRepository->create($input);

        Flash::success('Nameserver saved successfully.');

        return redirect(route('admin.nameservers.nameservers.index'));
    }

    /**
     * Display the specified Nameserver.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $nameserver = $this->nameserverRepository->findWithoutFail($id);

        if (empty($nameserver)) {
            Flash::error('Nameserver not found');

            return redirect(route('nameservers.index'));
        }

        return view('admin.nameservers.nameservers.show')->with('nameserver', $nameserver);
    }

    /**
     * Show the form for editing the specified Nameserver.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $nameserver = $this->nameserverRepository->findWithoutFail($id);

        if (empty($nameserver)) {
            Flash::error('Nameserver not found');

            return redirect(route('nameservers.index'));
        }

        return view('admin.nameservers.nameservers.edit')->with('nameserver', $nameserver);
    }

    /**
     * Update the specified Nameserver in storage.
     *
     * @param  int              $id
     * @param UpdateNameserverRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateNameserverRequest $request)
    {
        $nameserver = $this->nameserverRepository->findWithoutFail($id);

        

        if (empty($nameserver)) {
            Flash::error('Nameserver not found');

            return redirect(route('nameservers.index'));
        }

        $nameserver = $this->nameserverRepository->update($request->all(), $id);

        Flash::success('Nameserver updated successfully.');

        return redirect(route('admin.nameservers.nameservers.index'));
    }

    /**
     * Remove the specified Nameserver from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
      public function getModalDelete($id = null)
      {
          $error = '';
          $model = '';
          $confirm_route =  route('admin.nameservers.nameservers.delete',['id'=>$id]);
          return View('admin.layouts/modal_confirmation', compact('error','model', 'confirm_route'));

      }

       public function getDelete($id = null)
       {
           $sample = Nameserver::destroy($id);

           // Redirect to the group management page
           return redirect(route('admin.nameservers.nameservers.index'))->with('success', Lang::get('message.success.delete'));

       }

}
