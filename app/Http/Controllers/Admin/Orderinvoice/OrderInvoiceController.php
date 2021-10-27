<?php

namespace App\Http\Controllers\Admin\Orderinvoice;

use App\Http\Requests;
use App\Http\Requests\Orderinvoice\CreateOrderInvoiceRequest;
use App\Http\Requests\Orderinvoice\UpdateOrderInvoiceRequest;
use App\Repositories\Orderinvoice\OrderInvoiceRepository;
use App\Http\Controllers\AppBaseController as InfyOmBaseController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Lang;
use App\Models\Orderinvoice\OrderInvoice;
use Flash;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;

class OrderInvoiceController extends InfyOmBaseController
{
    /** @var  OrderInvoiceRepository */
    private $orderInvoiceRepository;

    public function __construct(OrderInvoiceRepository $orderInvoiceRepo)
    {
        $this->orderInvoiceRepository = $orderInvoiceRepo;
    }

    /**
     * Display a listing of the OrderInvoice.
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {

        $this->orderInvoiceRepository->pushCriteria(new RequestCriteria($request));
        $orderInvoices = $this->orderInvoiceRepository->all();
        return view('admin.orderInvoice.orderInvoices.index')
            ->with('orderInvoices', $orderInvoices);
    }

    /**
     * Show the form for creating a new OrderInvoice.
     *
     * @return Response
     */
    public function create()
    {
        return view('admin.orderInvoice.orderInvoices.create');
    }

    /**
     * Store a newly created OrderInvoice in storage.
     *
     * @param CreateOrderInvoiceRequest $request
     *
     * @return Response
     */
    public function store(CreateOrderInvoiceRequest $request)
    {
        $input = $request->all();

        $orderInvoice = $this->orderInvoiceRepository->create($input);

        Flash::success('OrderInvoice saved successfully.');

        return redirect(route('admin.orderInvoice.orderInvoices.index'));
    }

    /**
     * Display the specified OrderInvoice.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $orderInvoice = $this->orderInvoiceRepository->findWithoutFail($id);

        if (empty($orderInvoice)) {
            Flash::error('OrderInvoice not found');

            return redirect(route('orderInvoices.index'));
        }

        return view('admin.orderInvoice.orderInvoices.show')->with('orderInvoice', $orderInvoice);
    }

    /**
     * Show the form for editing the specified OrderInvoice.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $orderInvoice = $this->orderInvoiceRepository->findWithoutFail($id);

        if (empty($orderInvoice)) {
            Flash::error('OrderInvoice not found');

            return redirect(route('orderInvoices.index'));
        }

        return view('admin.orderInvoice.orderInvoices.edit')->with('orderInvoice', $orderInvoice);
    }

    /**
     * Update the specified OrderInvoice in storage.
     *
     * @param  int              $id
     * @param UpdateOrderInvoiceRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateOrderInvoiceRequest $request)
    {
        $orderInvoice = $this->orderInvoiceRepository->findWithoutFail($id);

        

        if (empty($orderInvoice)) {
            Flash::error('OrderInvoice not found');

            return redirect(route('orderInvoices.index'));
        }

        $orderInvoice = $this->orderInvoiceRepository->update($request->all(), $id);

        Flash::success('OrderInvoice updated successfully.');

        return redirect(route('admin.orderInvoice.orderInvoices.index'));
    }

    /**
     * Remove the specified OrderInvoice from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
      public function getModalDelete($id = null)
      {
          $error = '';
          $model = '';
          $confirm_route =  route('admin.orderInvoice.orderInvoices.delete',['id'=>$id]);
          return View('admin.layouts/modal_confirmation', compact('error','model', 'confirm_route'));

      }

       public function getDelete($id = null)
       {
           $sample = OrderInvoice::destroy($id);

           // Redirect to the group management page
           return redirect(route('admin.orderInvoice.orderInvoices.index'))->with('success', Lang::get('message.success.delete'));

       }

}
