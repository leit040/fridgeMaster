<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Http\Requests\AvailableBlockRequest;
use App\Http\Resources\BlockResource;
use App\Http\Resources\LocationResource;
use App\Models\Block;
use App\Models\Location;
use App\Models\Order;
use Illuminate\Http\Request;

class LocationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return LocationResource::collection(Location::all());
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param \App\Models\Location $location
     * @return \Illuminate\Http\Response
     */
    public function show(Location $location)
    {
        return new LocationResource($location);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param \App\Models\Location $location
     * @return \Illuminate\Http\Response
     */
    public function destroy(Location $location)
    {
        //
    }

    /**
     * Get available blocks in location.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Resources\Json\AnonymousResourceCollection
     */
    public function availableBlocks(Location $location, AvailableBlockRequest $request)
    {
        $orderIds = Order::where('startAt', '>=', $request->endAt)->OrWhere('endAt', '<=', $request->startAt)->pluck('id');
        $blocks = $location->blocks()->whereNotIn('id', $orderIds)->where('frostLevel', '=', $request->frostLevel)->get();
        if ($blocks->count() >= $request->count) {
            return BlockResource::collection($blocks);
        }
        return false;

    }


}
