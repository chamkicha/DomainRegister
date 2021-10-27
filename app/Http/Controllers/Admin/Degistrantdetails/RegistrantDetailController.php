<?php

namespace App\Http\Controllers\Admin\Degistrantdetails;

use App\Http\Requests;
use App\Http\Requests\Degistrantdetails\CreateRegistrantDetailRequest;
use App\Http\Requests\Degistrantdetails\UpdateRegistrantDetailRequest;
use App\Repositories\Degistrantdetails\RegistrantDetailRepository;
use App\Http\Controllers\AppBaseController as InfyOmBaseController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Lang;
use App\Models\Degistrantdetails\RegistrantDetail;
use Flash;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;

class RegistrantDetailController extends InfyOmBaseController
{
    /** @var  RegistrantDetailRepository */
    private $registrantDetailRepository;

    public function __construct(RegistrantDetailRepository $registrantDetailRepo)
    {
        $this->registrantDetailRepository = $registrantDetailRepo;
    }

    /**
     * Display a listing of the RegistrantDetail.
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {

        $this->registrantDetailRepository->pushCriteria(new RequestCriteria($request));
        $registrantDetails = $this->registrantDetailRepository->all();
        return view('admin.degistrantDetails.registrantDetails.index')
            ->with('registrantDetails', $registrantDetails);
    }

    /**
     * Show the form for creating a new RegistrantDetail.
     *
     * @return Response
     */
    public function create()
    {
        return view('admin.degistrantDetails.registrantDetails.create');
    }

    /**
     * Store a newly created RegistrantDetail in storage.
     *
     * @param CreateRegistrantDetailRequest $request
     *
     * @return Response
     */
    public function store(CreateRegistrantDetailRequest $request)
    {
        $input = $request->all();

        $registrantDetail = $this->registrantDetailRepository->create($input);

        Flash::success('RegistrantDetail saved successfully.');

        return redirect(route('admin.degistrantDetails.registrantDetails.index'));
    }

    /**
     * Display the specified RegistrantDetail.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $registrantDetail = $this->registrantDetailRepository->findWithoutFail($id);

        if (empty($registrantDetail)) {
            Flash::error('RegistrantDetail not found');

            return redirect(route('registrantDetails.index'));
        }

        return view('admin.degistrantDetails.registrantDetails.show')->with('registrantDetail', $registrantDetail);
    }

    /**
     * Show the form for editing the specified RegistrantDetail.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $registrantDetail = $this->registrantDetailRepository->findWithoutFail($id);

        if (empty($registrantDetail)) {
            Flash::error('RegistrantDetail not found');

            return redirect(route('registrantDetails.index'));
        }

        return view('admin.degistrantDetails.registrantDetails.edit')->with('registrantDetail', $registrantDetail);
    }

    /**
     * Update the specified RegistrantDetail in storage.
     *
     * @param  int              $id
     * @param UpdateRegistrantDetailRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateRegistrantDetailRequest $request)
    {
        $registrantDetail = $this->registrantDetailRepository->findWithoutFail($id);

        

        if (empty($registrantDetail)) {
            Flash::error('RegistrantDetail not found');

            return redirect(route('registrantDetails.index'));
        }

        $registrantDetail = $this->registrantDetailRepository->update($request->all(), $id);

        Flash::success('RegistrantDetail updated successfully.');

        return redirect(route('admin.degistrantDetails.registrantDetails.index'));
    }

    /**
     * Remove the specified RegistrantDetail from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
      public function getModalDelete($id = null)
      {
          $error = '';
          $model = '';
          $confirm_route =  route('admin.degistrantDetails.registrantDetails.delete',['id'=>$id]);
          return View('admin.layouts/modal_confirmation', compact('error','model', 'confirm_route'));

      }

       public function getDelete($id = null)
       {
           $sample = RegistrantDetail::destroy($id);

           // Redirect to the group management page
           return redirect(route('admin.degistrantDetails.registrantDetails.index'))->with('success', Lang::get('message.success.delete'));

       }

}
