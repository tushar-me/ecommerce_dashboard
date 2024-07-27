<?php

namespace App\Http\Controllers\Api\V1;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Order;
use App\Models\User;
use App\Http\Resources\V1\Order\OrderListResource;
use App\Http\Resources\V1\Order\OrderShowResource;
use App\Http\Requests\V1\OrderStoreRequest;
use App\Models\OrderDetail;
use Symfony\Component\HttpFoundation\Response;

class OrderController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $orders = Order::query()
            ->with(['orderDetails', 'orderDetails.product', 'user'])
            ->paginate(10);
        return OrderListResource::collection($orders);
    }

    public function customerOrder(Request $request)
    {
        $user = User::find($request->user_id);
        $orders = $user->orders;

        return OrderListResource::collection($orders);
    }

    public function showCustomerOrder($id)
    {
        $order =  Order::where('id', $id)->with('customer', 'orderDetails', 'address')->first();

        return OrderShowResource::make($order);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(OrderStoreRequest $request)
    {
        $data = $request->validated();
        return $data;

        $order = Order::create($data);



        $orderDetails = [];
        foreach($data['order_items'] as $detail)
        {
            $orderDetails[] = [
                'order_id' => $order->id,
                'product_id' => $data['product']['id'],
                'quantity' => $data['selectSku']['selectQty']
            ];
        }

        OrderDetail::insert($orderDetails);

        return OrderShowResource::make($order );
    }

    public function show(string $id)
    {
        //
    }

    public function update(Request $request, string $id)
    {
        //
    }

    public function destroy(string $id)
    {
        $order = Order::findOrFail($id);
        if($order){
            $order->orderDetails()->delete();
            $order->delete();
            return Response::HTTP_OK;
        }
    }
}