<?php

namespace App\Http\Controllers\Admin\Orderstatus;

use App\Http\Requests;
use App\Http\Requests\Orderstatus\CreateOrderStatusRequest;
use App\Http\Requests\Orderstatus\UpdateOrderStatusRequest;
use App\Repositories\Orderstatus\OrderStatusRepository;
use App\Http\Controllers\AppBaseController as InfyOmBaseController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Lang;
use App\Models\Orderstatus\OrderStatus;
use Flash;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;

class OrderStatusController extends InfyOmBaseController
{
    /** @var  OrderStatusRepository */
    private $orderStatusRepository;

    public function __construct(OrderStatusRepository $orderStatusRepo)
    {
        $this->orderStatusRepository = $orderStatusRepo;
    }

    /**
     * Display a listing of the OrderStatus.
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {

        $this->orderStatusRepository->pushCriteria(new RequestCriteria($request));
        $orderStatuses = $this->orderStatusRepository->all();
        return view('admin.orderStatus.orderStatuses.index')
            ->with('orderStatuses', $orderStatuses);
    }

    /**
     * Show the form for creating a new OrderStatus.
     *
     * @return Response
     */
    public function create()
    {
        return view('admin.orderStatus.orderStatuses.create');
    }

    /**
     * Store a newly created OrderStatus in storage.
     *
     * @param CreateOrderStatusRequest $request
     *
     * @return Response
     */
    public function store(CreateOrderStatusRequest $request)
    {
        $input = $request->all();

        $orderStatus = $this->orderStatusRepository->create($input);

        Flash::success('OrderStatus saved successfully.');

        return redirect(route('admin.orderStatus.orderStatuses.index'));
    }

    /**
     * Display the specified OrderStatus.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $orderStatus = $this->orderStatusRepository->findWithoutFail($id);

        if (empty($orderStatus)) {
            Flash::error('OrderStatus not found');

            return redirect(route('orderStatuses.index'));
        }

        return view('admin.orderStatus.orderStatuses.show')->with('orderStatus', $orderStatus);
    }

    /**
     * Show the form for editing the specified OrderStatus.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $orderStatus = $this->orderStatusRepository->findWithoutFail($id);

        if (empty($orderStatus)) {
            Flash::error('OrderStatus not found');

            return redirect(route('orderStatuses.index'));
        }

        return view('admin.orderStatus.orderStatuses.edit')->with('orderStatus', $orderStatus);
    }

    /**
     * Update the specified OrderStatus in storage.
     *
     * @param  int              $id
     * @param UpdateOrderStatusRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateOrderStatusRequest $request)
    {
        $orderStatus = $this->orderStatusRepository->findWithoutFail($id);

        

        if (empty($orderStatus)) {
            Flash::error('OrderStatus not found');

            return redirect(route('orderStatuses.index'));
        }

        $orderStatus = $this->orderStatusRepository->update($request->all(), $id);

        Flash::success('OrderStatus updated successfully.');

        return redirect(route('admin.orderStatus.orderStatuses.index'));
    }

    /**
     * Remove the specified OrderStatus from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
      public function getModalDelete($id = null)
      {
          $error = '';
          $model = '';
          $confirm_route =  route('admin.orderStatus.orderStatuses.delete',['id'=>$id]);
          return View('admin.layouts/modal_confirmation', compact('error','model', 'confirm_route'));

      }

       public function getDelete($id = null)
       {
           $sample = OrderStatus::destroy($id);

           // Redirect to the group management page
           return redirect(route('admin.orderStatus.orderStatuses.index'))->with('success', Lang::get('message.success.delete'));

       }

}
