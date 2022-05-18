<?php

declare(strict_types=1);

namespace App\Definitions;

/**
 * @OA\Schema(
 *     @OA\Property(property="id", type="integer"),
 *     @OA\Property(property="userId", type="string"),
 *     @OA\Property(property="startAt", type="string"),
 *     @OA\Property(property="endAt", type="string"),
 *     @OA\Property(property="created_at", type="string"),
 *     @OA\Property(property="updated_at", type="string"),
 *     @OA\Property(property="price", type="number"),
 *     @OA\Property(property="accessCode", type="string"),
 *     @OA\Property(property="blocks", type="array", @OA\Items(ref="#/components/schemas/fullBlock")),

 * )
 */
class Order
{
}
