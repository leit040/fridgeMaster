<?php

/**
 * @OA\Get(
 *     path="/api/location/",
 *     tags={"Locations"},
 *     summary="Get all Locations",
 *     @OA\Response(
 *         response=200,
 *         description="successful operation",
 *          @OA\JsonContent(
 *              @OA\Property(property="items", type="array", @OA\Items(ref="#/components/schemas/Location")),
 *              @OA\Property(property="_meta", type="object", ref="#/components/schemas/Meta"),
 *          )
 *     )
 * )
 */

/**
 * @OA\Get(
 *     path="/api/location/{id}",
 *     tags={"Locations"},
 *     summary="Get specific location",
 *     @OA\Response(
 *         response=200,
 *         description="successful operation",
 *          @OA\JsonContent(ref="#/components/schemas/Location")
 *     ),
 *     @OA\Parameter(
 *         name="id",
 *         in="path",
 *         description="Location id",
 *         required=true,
 *         @OA\Schema(
 *             type="string"
 *         )),
 *     )
 * )
 */
/**
 * @OA\Post(
 *     path="/api/location",
 *     tags={"Locations"},
 *     summary="Create Location",
 *     @OA\Response(
 *         response=204,
 *         description="Location was created successfully"),
 *     @OA\RequestBody(
 *         description="Requested body",
 *         required=true,
 *         @OA\JsonContent(ref="#/components/schemas/CreateLocation"),
 *     )
 * )
 */



/**
 * @OA\Delete(
 *     path="/api/location/{id}",
 *     tags={"Locations"},
 *     summary="Delete location",
 *     @OA\Parameter(
 *         name="id",
 *         in="path",
 *         description="Location id",
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
