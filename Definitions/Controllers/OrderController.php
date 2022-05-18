<?php

/**
 * @OA\Get(
 *     path="/api/order/",
 *     tags={"Orders"},
 *     summary="Get all Orders",
 *     @OA\Response(
 *         response=200,
 *         description="successful operation",
 *          @OA\JsonContent(
 *              @OA\Property(property="items", type="array", @OA\Items(ref="#/components/schemas/Order")),
 *              @OA\Property(property="_meta", type="object", ref="#/components/schemas/Meta"),
 *          )
 *     )
 * )
 */

/**
 * @OA\Get(
 *     path="/api/order/{id}",
 *     tags={"Orders"},
 *     summary="Get specific order",
 *     @OA\Response(
 *         response=200,
 *         description="successful operation",
 *          @OA\JsonContent(ref="#/components/schemas/Order")
 *     ),
 *     @OA\Parameter(
 *         name="id",
 *         in="path",
 *         description="Order id",
 *         required=true,
 *         @OA\Schema(
 *             type="string"
 *         )),
 *     )
 * )
 */
/**
 * @OA\Post(
 *     path="/api/order",
 *     tags={"Orders"},
 *     summary="Create Order",
 *     @OA\Response(
 *         response=204,
 *         description="Order was created successfully"),
 *     @OA\RequestBody(
 *         description="Requested body",
 *         required=true,
 *         @OA\JsonContent(ref="#/components/schemas/CreateOrder"),
 *     )
 * )
 */

/**
 * @OA\Post(
 *     path="/api/makeOrder",
 *     tags={"Orders"},
 *     summary="Make Order",
 *     @OA\Response(
 *         response=200,
 *         description="Get orders information",
 *          @OA\JsonContent(ref="#/components/schemas/MakeOrderRequest")),
 *     @OA\RequestBody(
 *         description="Requested body",
 *         required=true,
 *         @OA\JsonContent(ref="#/components/schemas/MakeOrder"),
 *     )
 * )
 */


/**
 * @OA\Delete(
 *     path="/api/order/{id}",
 *     tags={"Orders"},
 *     summary="Delete order",
 *     @OA\Parameter(
 *         name="id",
 *         in="path",
 *         description="Order id",
 *         required=true,
 *         @OA\Schema(
 *             type="string"
 *         )
 *     ),
 *     @OA\Response(
 *         response=204,
 *         description="successful operation",
 *     )
 * )
 */
