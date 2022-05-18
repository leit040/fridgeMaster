<?php

declare(strict_types=1);

namespace App\Definitions;

/**
 * @OA\Schema(
 *     @OA\Property(property="userId", type="string"),
 *     @OA\Property(property="startAt", type="string"),
 *     @OA\Property(property="endAt", type="string"),
 *     @OA\Property(property="blockIds", type="array",@OA\Items( type="number")),
 *     @OA\Property(property="price", type="number"),
 *     @OA\Property(property="accessCode", type="string"),
 * )
 */
class CreateOrder
{
}
