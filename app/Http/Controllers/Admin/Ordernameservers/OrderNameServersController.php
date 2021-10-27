<?php

namespace App\Http\Controllers\Admin\Ordernameservers;

use App\Http\Requests;
use App\Http\Requests\Ordernameservers\CreateOrderNameServersRequest;
use App\Http\Requests\Ordernameservers\UpdateOrderNameServersRequest;
use App\Repositories\Ordernameservers\OrderNameServersRepository;
use App\Http\Controllers\AppBaseController as InfyOmBaseController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Lang;
use App\Models\Ordernameservers\OrderNameServers;
use Flash;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;

class OrderNameServersController extends InfyOmBaseController
{
    /** @var  OrderNameServersRepository */
    private $orderNameServersRepository;

    public function __construct(OrderNameServersRepository $orderNameServersRepo)
    {
        $this->orderNameServersRepository = $orderNameServersRepo;
    }

    /**
     * Display a listing of the OrderNameServers.
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {

        $this->orderNameServersRepository->pushCriteria(new RequestCriteria($request));
        $orderNameServers = $this->orderNameServersRepository->all();
        return view('admin.orderNameServers.orderNameServers.index')
            ->with('orderNameServers', $orderNameServers);
    }

    /**
     * Show the form for creating a new OrderNameServers.
     *
     * @return Response
     */
    public function create()
    {
        return view('admin.orderNameServers.orderNameServers.create');
    }

    /**
     * Store a newly created OrderNameServers in storage.
     *
     * @param CreateOrderNameServersRequest $request
     *
     * @return Response
     */
    public function store(CreateOrderNameServersRequest $request)
    {
        $input = $request->all();

        $orderNameServers = $this->orderNameServersRepository->create($input);

        Flash::success('OrderNameServers saved successfully.');

        return redirect(route('admin.orderNameServers.orderNameServers.index'));
    }

    /**
     * Display the specified OrderNameServers.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $orderNameServers = $this->orderNameServersRepository->findWithoutFail($id);

        if (empty($orderNameServers)) {
            Flash::error('OrderNameServers not found');

            return redirect(route('orderNameServers.index'));
        }

        return view('admin.orderNameServers.orderNameServers.show')->with('orderNameServers', $orderNameServers);
    }

    /**
     * Show the form for editing the specified OrderNameServers.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $orderNameServers = $this->orderNameServersRepository->findWithoutFail($id);

        if (empty($orderNameServers)) {
            Flash::error('OrderNameServers not found');

            return redirect(route('orderNameServers.index'));
        }

        return view('admin.orderNameServers.orderNameServers.edit')->with('orderNameServers', $orderNameServers);
    }

    /**
     * Update the specified OrderNameServers in storage.
     *
     * @param  int              $id
     * @param UpdateOrderNameServersRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateOrderNameServersRequest $request)
    {
        $orderNameServers = $this->orderNameServersRepository->findWithoutFail($id);

        

        if (empty($orderNameServers)) {
            Flash::error('OrderNameServers not found');

            return redirect(route('orderNameServers.index'));
        }

        $orderNameServers = $this->orderNameServersRepository->update($request->all(), $id);

        Flash::success('OrderNameServers updated successfully.');

        return redirect(route('admin.orderNameServers.orderNameServers.index'));
    }

    /**
     * Remove the specified OrderNameServers from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
      public function getModalDelete($id = null)
      {
          $error = '';
          $model = '';
          $confirm_route =  route('admin.orderNameServers.orderNameServers.delete',['id'=>$id]);
          return View('admin.layouts/modal_confirmation', compact('error','model', 'confirm_route'));

      }

       public function getDelete($id = null)
       {
           $sample = OrderNameServers::destroy($id);

           // Redirect to the group management page
           return redirect(route('admin.orderNameServers.orderNameServers.index'))->with('success', Lang::get('message.success.delete'));

       }

}
