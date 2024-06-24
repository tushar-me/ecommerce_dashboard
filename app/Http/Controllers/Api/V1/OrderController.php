<?php

namespace App\Http\Controllers\Api\V1;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Order;
use App\Http\Resources\V1\Order\OrderListResource;
use App\Http\Resources\V1\Order\OrderShowResource;
use App\Http\Requests\V1\OrderStoreRequest;
use Symfony\Component\HttpFoundation\Response;

class OrderController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $orders = Order::query()
            ->with(['orderDetails', 'orderDetails.product'])
            ->paginate(10);
        return OrderListResource::collection($orders);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(OrderStoreRequest $request)
    {
        $order = Order::create($request->validated);
        $details = array_map(function ($item)use($order){
            $item["order_id"] = $order->id;
            return $item;
        }, $request["order_details"]);
        $order->orderDetails()->createMany($details);
        return OrderShowResource::make($order->load('orderDetails'));
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
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
