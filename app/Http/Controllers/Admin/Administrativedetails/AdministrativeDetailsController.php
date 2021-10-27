<?php

namespace App\Http\Controllers\Admin\Administrativedetails;

use App\Http\Requests;
use App\Http\Requests\Administrativedetails\CreateAdministrativeDetailsRequest;
use App\Http\Requests\Administrativedetails\UpdateAdministrativeDetailsRequest;
use App\Repositories\Administrativedetails\AdministrativeDetailsRepository;
use App\Http\Controllers\AppBaseController as InfyOmBaseController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Lang;
use App\Models\Administrativedetails\AdministrativeDetails;
use Flash;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;

class AdministrativeDetailsController extends InfyOmBaseController
{
    /** @var  AdministrativeDetailsRepository */
    private $administrativeDetailsRepository;

    public function __construct(AdministrativeDetailsRepository $administrativeDetailsRepo)
    {
        $this->administrativeDetailsRepository = $administrativeDetailsRepo;
    }

    /**
     * Display a listing of the AdministrativeDetails.
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {

        $this->administrativeDetailsRepository->pushCriteria(new RequestCriteria($request));
        $administrativeDetails = $this->administrativeDetailsRepository->all();
        return view('admin.administrativeDetails.administrativeDetails.index')
            ->with('administrativeDetails', $administrativeDetails);
    }

    /**
     * Show the form for creating a new AdministrativeDetails.
     *
     * @return Response
     */
    public function create()
    {
        return view('admin.administrativeDetails.administrativeDetails.create');
    }

    /**
     * Store a newly created AdministrativeDetails in storage.
     *
     * @param CreateAdministrativeDetailsRequest $request
     *
     * @return Response
     */
    public function store(CreateAdministrativeDetailsRequest $request)
    {
        $input = $request->all();

        $administrativeDetails = $this->administrativeDetailsRepository->create($input);

        Flash::success('AdministrativeDetails saved successfully.');

        return redirect(route('admin.administrativeDetails.administrativeDetails.index'));
    }

    /**
     * Display the specified AdministrativeDetails.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $administrativeDetails = $this->administrativeDetailsRepository->findWithoutFail($id);

        if (empty($administrativeDetails)) {
            Flash::error('AdministrativeDetails not found');

            return redirect(route('administrativeDetails.index'));
        }

        return view('admin.administrativeDetails.administrativeDetails.show')->with('administrativeDetails', $administrativeDetails);
    }

    /**
     * Show the form for editing the specified AdministrativeDetails.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $administrativeDetails = $this->administrativeDetailsRepository->findWithoutFail($id);

        if (empty($administrativeDetails)) {
            Flash::error('AdministrativeDetails not found');

            return redirect(route('administrativeDetails.index'));
        }

        return view('admin.administrativeDetails.administrativeDetails.edit')->with('administrativeDetails', $administrativeDetails);
    }

    /**
     * Update the specified AdministrativeDetails in storage.
     *
     * @param  int              $id
     * @param UpdateAdministrativeDetailsRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateAdministrativeDetailsRequest $request)
    {
        $administrativeDetails = $this->administrativeDetailsRepository->findWithoutFail($id);

        

        if (empty($administrativeDetails)) {
            Flash::error('AdministrativeDetails not found');

            return redirect(route('administrativeDetails.index'));
        }

        $administrativeDetails = $this->administrativeDetailsRepository->update($request->all(), $id);

        Flash::success('AdministrativeDetails updated successfully.');

        return redirect(route('admin.administrativeDetails.administrativeDetails.index'));
    }

    /**
     * Remove the specified AdministrativeDetails from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
      public function getModalDelete($id = null)
      {
          $error = '';
          $model = '';
          $confirm_route =  route('admin.administrativeDetails.administrativeDetails.delete',['id'=>$id]);
          return View('admin.layouts/modal_confirmation', compact('error','model', 'confirm_route'));

      }

       public function getDelete($id = null)
       {
           $sample = AdministrativeDetails::destroy($id);

           // Redirect to the group management page
           return redirect(route('admin.administrativeDetails.administrativeDetails.index'))->with('success', Lang::get('message.success.delete'));

       }

}
