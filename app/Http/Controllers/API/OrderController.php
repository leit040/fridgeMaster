<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Http\Requests\MakeOrderRequest;
use App\Http\Requests\StoreOrderRequest;
use App\Http\Resources\MakeOrderResource;
use App\Http\Resources\OrderResource;
use App\Models\Location;
use App\Models\Order;
use Carbon\Carbon;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return OrderResource::collection(Order::all());
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreOrderRequest  $request)
    {
        $data = $request->validated();
        $model = Order::create($data);

        return new OrderResource($model);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function makeOrder(MakeOrderRequest $request)
    {
        $location = Location::find($request->locationId);
        $orderIds = Order::where('startAt', '>=', $request->endAt)->OrWhere('endAt', '<=', $request->startAt)->pluck('id');
        $blocks = $location->blocks()->whereNotIn('id', $orderIds)->where('frostLevel', '=', $request->frostLevel)->get();
        $count = $request->volume / 2;
        if ($count % 2 != (int)$count % 2) {
            ++$count;
        }
        if ($blocks->count() >= $count) {

            switch ($request->frostLevel) {
                case'High':
                    $price = $location->pricePerHighLevel;
                    break;
                case'Medium':
                    $price = $location->pricePerMediumLevel;
                    break;
                case'Low':
                    $price = $location->pricePerLowLevel;
                    break;
                default:
                    $price = $location->pricePerHighLevel;
                    break;
            }

            $daysCount = (new \DateTime($request->endAt))->diff(new \DateTime($request->startAt))->format("%a");
            $blockIds = $blocks->take($count)->pluck('id')->toArray();
            $generalPrice = $price * $daysCount * $count;
            $code = bin2hex(random_bytes(12));
            $data = [
                'daysCount' => $daysCount,
                'blockIds' => $blockIds,
                'price' => $generalPrice,
                'accessCode' => $code
            ];
            return new MakeOrderResource($data);

        }
        return false;
    }

    /**
     * Display the specified resource.
     *
     * @param \App\Models\Order $order
     * @return \Illuminate\Http\Response
     */
    public function show(Order $order)
    {
        //
    }


    public function destroy(Order $order)
    {
        //
    }
}
