<?php

/**
 * @OA\Get(
 *     path="/api/users/{count}",
 *     tags={"Users"},
 *     summary="Get Users,  count - int count for pagination",
 *     @OA\Response(
 *         response=200,
 *         description="successful operation",
 *          @OA\JsonContent(
 *              @OA\Property(property="items", type="array", @OA\Items(ref="#/components/schemas/User")),
 *              @OA\Property(property="_meta", type="object", ref="#/components/schemas/Meta"),
 *          )
 *     )
 * )
 */

/**
 * @OA\Get(
 *     path="/api/user/{id}/orders",
 *     tags={"Users"},
 *     summary="Get Orders by user",
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
 *     path="/api/user/{id}",
 *     tags={"Users"},
 *     summary="Get specific user",
 *     @OA\Response(
 *         response=200,
 *         description="successful operation",
 *          @OA\JsonContent(ref="#/components/schemas/User")
 *     ),
 *     @OA\Parameter(
 *         name="id",
 *         in="path",
 *         description="User id",
 *         required=true,
 *         @OA\Schema(
 *             type="string"
 *         )),
 *     )
 * )
 */
/**
 * @OA\Post(
 *     path="/api/user",
 *     tags={"Users"},
 *     summary="Create user",
 *     @OA\Response(
 *         response=204,
 *         description="User was created successfully"),
 *     @OA\RequestBody(
 *         description="Requested body",
 *         required=true,
 *         @OA\JsonContent(ref="#/components/schemas/CreateUser"),
 *     )
 * )
 */

/**
 * @OA\Put(
 *     path="/api/user/{id}/updatePassword",
 *     tags={"Users"},
 *     summary="Update user password",
 *     @OA\Response(
 *         response=200,
 *         description="Password was updated successfully"),
 *     @OA\RequestBody(
 *         description="Requested body",
 *         required=true,
 *         @OA\JsonContent(@OA\Property(property="password", type="string")),
 *     )
 * )
 */

/**
 * @OA\Put(
 *     path="/api/user/{id}/updateRole",
 *     tags={"Users"},
 *     summary="Update user Role",
 *     @OA\Response(
 *         response=200,
 *         description="Role was updated successfully"),
 *     @OA\RequestBody(
 *         description="Requested body",
 *         required=true,
 *         @OA\JsonContent(@OA\Property(property="role_id", type="integer")),
 *     )
 * )
 */

/**
 * @OA\Put(
 *     path="/api/user/updateData",
 *     tags={"Users"},
 *     summary="Update user login and password for current (Auth) user",
 *     @OA\Response(
 *         response=200,
 *         description="Date was updated successfully"),
 *     @OA\RequestBody(
 *         description="Requested body",
 *         required=true,
 *         @OA\JsonContent(@OA\Property(property="nickName", type="string"),@OA\Property(property="password", type="string")),
 *     )
 * )
 */

/**
 * @OA\Put(
 *     path="/api/user/{id}/updateName",
 *     tags={"Users"},
 *     summary="Update user name for  user",
 *     @OA\Response(
 *         response=200,
 *         description="Name was updated successfully"),
 *     @OA\RequestBody(
 *         description="Requested body",
 *         required=true,
 *         @OA\JsonContent(@OA\Property(property="name", type="string")),
 *     )
 * )
 */

/**
 * @OA\Delete(
 *     path="/api/user/{id}",
 *     tags={"Users"},
 *     summary="Delete user",
 *     @OA\Parameter(
 *         name="id",
 *         in="path",
 *         description="User id",
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
