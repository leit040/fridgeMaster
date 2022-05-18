<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Http\Requests\BlockRequest;
use App\Http\Requests\BookRequest;
use App\Http\Resources\BlockResource;
use App\Http\Resources\fullBlockRecourse;
use App\Models\Block;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\AnonymousResourceCollection;

class BlockController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return AnonymousResourceCollection
     */
    public function index()
    {
return BlockResource::collection(Block::all());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return BlockResource
     */

    public function store(BlockRequest $request)
    {
        $data = $request->all();
        $model = Block::create($data);
        return new BlockResource($model);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Block  $block
     * @return fullBlockRecourse
     */
    public function show(Block $block)
    {
        return new fullBlockRecourse($block);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Block  $block
     * @return \Illuminate\Http\Response
     */
    public function destroy(Block $block)
    {
        //
    }
}
