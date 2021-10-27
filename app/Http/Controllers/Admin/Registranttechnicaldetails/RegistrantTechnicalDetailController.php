<?php

namespace App\Http\Controllers\Admin\Registranttechnicaldetails;

use App\Http\Requests;
use App\Http\Requests\Registranttechnicaldetails\CreateRegistrantTechnicalDetailRequest;
use App\Http\Requests\Registranttechnicaldetails\UpdateRegistrantTechnicalDetailRequest;
use App\Repositories\Registranttechnicaldetails\RegistrantTechnicalDetailRepository;
use App\Http\Controllers\AppBaseController as InfyOmBaseController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Lang;
use App\Models\Registranttechnicaldetails\RegistrantTechnicalDetail;
use Flash;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;

class RegistrantTechnicalDetailController extends InfyOmBaseController
{
    /** @var  RegistrantTechnicalDetailRepository */
    private $registrantTechnicalDetailRepository;

    public function __construct(RegistrantTechnicalDetailRepository $registrantTechnicalDetailRepo)
    {
        $this->registrantTechnicalDetailRepository = $registrantTechnicalDetailRepo;
    }

    /**
     * Display a listing of the RegistrantTechnicalDetail.
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {

        $this->registrantTechnicalDetailRepository->pushCriteria(new RequestCriteria($request));
        $registrantTechnicalDetails = $this->registrantTechnicalDetailRepository->all();
        return view('admin.registrantTechnicalDetails.registrantTechnicalDetails.index')
            ->with('registrantTechnicalDetails', $registrantTechnicalDetails);
    }

    /**
     * Show the form for creating a new RegistrantTechnicalDetail.
     *
     * @return Response
     */
    public function create()
    {
        return view('admin.registrantTechnicalDetails.registrantTechnicalDetails.create');
    }

    /**
     * Store a newly created RegistrantTechnicalDetail in storage.
     *
     * @param CreateRegistrantTechnicalDetailRequest $request
     *
     * @return Response
     */
    public function store(CreateRegistrantTechnicalDetailRequest $request)
    {
        $input = $request->all();

        $registrantTechnicalDetail = $this->registrantTechnicalDetailRepository->create($input);

        Flash::success('RegistrantTechnicalDetail saved successfully.');

        return redirect(route('admin.registrantTechnicalDetails.registrantTechnicalDetails.index'));
    }

    /**
     * Display the specified RegistrantTechnicalDetail.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $registrantTechnicalDetail = $this->registrantTechnicalDetailRepository->findWithoutFail($id);

        if (empty($registrantTechnicalDetail)) {
            Flash::error('RegistrantTechnicalDetail not found');

            return redirect(route('registrantTechnicalDetails.index'));
        }

        return view('admin.registrantTechnicalDetails.registrantTechnicalDetails.show')->with('registrantTechnicalDetail', $registrantTechnicalDetail);
    }

    /**
     * Show the form for editing the specified RegistrantTechnicalDetail.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $registrantTechnicalDetail = $this->registrantTechnicalDetailRepository->findWithoutFail($id);

        if (empty($registrantTechnicalDetail)) {
            Flash::error('RegistrantTechnicalDetail not found');

            return redirect(route('registrantTechnicalDetails.index'));
        }

        return view('admin.registrantTechnicalDetails.registrantTechnicalDetails.edit')->with('registrantTechnicalDetail', $registrantTechnicalDetail);
    }

    /**
     * Update the specified RegistrantTechnicalDetail in storage.
     *
     * @param  int              $id
     * @param UpdateRegistrantTechnicalDetailRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateRegistrantTechnicalDetailRequest $request)
    {
        $registrantTechnicalDetail = $this->registrantTechnicalDetailRepository->findWithoutFail($id);

        

        if (empty($registrantTechnicalDetail)) {
            Flash::error('RegistrantTechnicalDetail not found');

            return redirect(route('registrantTechnicalDetails.index'));
        }

        $registrantTechnicalDetail = $this->registrantTechnicalDetailRepository->update($request->all(), $id);

        Flash::success('RegistrantTechnicalDetail updated successfully.');

        return redirect(route('admin.registrantTechnicalDetails.registrantTechnicalDetails.index'));
    }

    /**
     * Remove the specified RegistrantTechnicalDetail from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
      public function getModalDelete($id = null)
      {
          $error = '';
          $model = '';
          $confirm_route =  route('admin.registrantTechnicalDetails.registrantTechnicalDetails.delete',['id'=>$id]);
          return View('admin.layouts/modal_confirmation', compact('error','model', 'confirm_route'));

      }

       public function getDelete($id = null)
       {
           $sample = RegistrantTechnicalDetail::destroy($id);

           // Redirect to the group management page
           return redirect(route('admin.registrantTechnicalDetails.registrantTechnicalDetails.index'))->with('success', Lang::get('message.success.delete'));

       }

}
