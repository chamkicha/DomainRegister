<?php

namespace App\Http\Controllers\Admin\Registrantbillingdetail;

use App\Http\Requests;
use App\Http\Requests\Registrantbillingdetail\CreateRegistrantBillingDetailsRequest;
use App\Http\Requests\Registrantbillingdetail\UpdateRegistrantBillingDetailsRequest;
use App\Repositories\Registrantbillingdetail\RegistrantBillingDetailsRepository;
use App\Http\Controllers\AppBaseController as InfyOmBaseController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Lang;
use App\Models\Registrantbillingdetail\RegistrantBillingDetails;
use Flash;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;

class RegistrantBillingDetailsController extends InfyOmBaseController
{
    /** @var  RegistrantBillingDetailsRepository */
    private $registrantBillingDetailsRepository;

    public function __construct(RegistrantBillingDetailsRepository $registrantBillingDetailsRepo)
    {
        $this->registrantBillingDetailsRepository = $registrantBillingDetailsRepo;
    }

    /**
     * Display a listing of the RegistrantBillingDetails.
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {

        $this->registrantBillingDetailsRepository->pushCriteria(new RequestCriteria($request));
        $registrantBillingDetails = $this->registrantBillingDetailsRepository->all();
        return view('admin.registrantBillingDetail.registrantBillingDetails.index')
            ->with('registrantBillingDetails', $registrantBillingDetails);
    }

    /**
     * Show the form for creating a new RegistrantBillingDetails.
     *
     * @return Response
     */
    public function create()
    {
        return view('admin.registrantBillingDetail.registrantBillingDetails.create');
    }

    /**
     * Store a newly created RegistrantBillingDetails in storage.
     *
     * @param CreateRegistrantBillingDetailsRequest $request
     *
     * @return Response
     */
    public function store(CreateRegistrantBillingDetailsRequest $request)
    {
        $input = $request->all();

        $registrantBillingDetails = $this->registrantBillingDetailsRepository->create($input);

        Flash::success('RegistrantBillingDetails saved successfully.');

        return redirect(route('admin.registrantBillingDetail.registrantBillingDetails.index'));
    }

    /**
     * Display the specified RegistrantBillingDetails.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $registrantBillingDetails = $this->registrantBillingDetailsRepository->findWithoutFail($id);

        if (empty($registrantBillingDetails)) {
            Flash::error('RegistrantBillingDetails not found');

            return redirect(route('registrantBillingDetails.index'));
        }

        return view('admin.registrantBillingDetail.registrantBillingDetails.show')->with('registrantBillingDetails', $registrantBillingDetails);
    }

    /**
     * Show the form for editing the specified RegistrantBillingDetails.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $registrantBillingDetails = $this->registrantBillingDetailsRepository->findWithoutFail($id);

        if (empty($registrantBillingDetails)) {
            Flash::error('RegistrantBillingDetails not found');

            return redirect(route('registrantBillingDetails.index'));
        }

        return view('admin.registrantBillingDetail.registrantBillingDetails.edit')->with('registrantBillingDetails', $registrantBillingDetails);
    }

    /**
     * Update the specified RegistrantBillingDetails in storage.
     *
     * @param  int              $id
     * @param UpdateRegistrantBillingDetailsRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateRegistrantBillingDetailsRequest $request)
    {
        $registrantBillingDetails = $this->registrantBillingDetailsRepository->findWithoutFail($id);

        

        if (empty($registrantBillingDetails)) {
            Flash::error('RegistrantBillingDetails not found');

            return redirect(route('registrantBillingDetails.index'));
        }

        $registrantBillingDetails = $this->registrantBillingDetailsRepository->update($request->all(), $id);

        Flash::success('RegistrantBillingDetails updated successfully.');

        return redirect(route('admin.registrantBillingDetail.registrantBillingDetails.index'));
    }

    /**
     * Remove the specified RegistrantBillingDetails from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
      public function getModalDelete($id = null)
      {
          $error = '';
          $model = '';
          $confirm_route =  route('admin.registrantBillingDetail.registrantBillingDetails.delete',['id'=>$id]);
          return View('admin.layouts/modal_confirmation', compact('error','model', 'confirm_route'));

      }

       public function getDelete($id = null)
       {
           $sample = RegistrantBillingDetails::destroy($id);

           // Redirect to the group management page
           return redirect(route('admin.registrantBillingDetail.registrantBillingDetails.index'))->with('success', Lang::get('message.success.delete'));

       }

}
