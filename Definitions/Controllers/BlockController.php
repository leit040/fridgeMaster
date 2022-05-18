<?php

/**
 * @OA\Get(
 *     path="/api/block/",
 *     tags={"Blocks"},
 *     summary="Get all Blocks",
 *     @OA\Response(
 *         response=200,
 *         description="successful operation",
 *          @OA\JsonContent(
 *              @OA\Property(property="items", type="array", @OA\Items(ref="#/components/schemas/Block")),
 *              @OA\Property(property="_meta", type="object", ref="#/components/schemas/Meta"),
 *          )
 *     )
 * )
 */

/**
 * @OA\Get(
 *     path="/api/block/{id}",
 *     tags={"Blocks"},
 *     summary="Get specific block",
 *     @OA\Response(
 *         response=200,
 *         description="successful operation",
 *          @OA\JsonContent(ref="#/components/schemas/fullBlock")
 *     ),
 *     @OA\Parameter(
 *         name="id",
 *         in="path",
 *         description="Block id",
 *         required=true,
 *         @OA\Schema(
 *             type="string"
 *         )),
 *     )
 * )
 */
/**
 * @OA\Post(
 *     path="/api/block",
 *     tags={"Blocks"},
 *     summary="Create Block",
 *     @OA\Response(
 *         response=204,
 *         description="User was created successfully"),
 *     @OA\RequestBody(
 *         description="Requested body",
 *         required=true,
 *         @OA\JsonContent(ref="#/components/schemas/CreateBlock"),
 *     )
 * )
 */



/**
 * @OA\Delete(
 *     path="/api/block/{id}",
 *     tags={"Blocks"},
 *     summary="Delete block",
 *     @OA\Parameter(
 *         name="id",
 *         in="path",
 *         description="Block id",
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
