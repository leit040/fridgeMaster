<?php

declare(strict_types=1);

namespace App\Definitions;

/**
 * @OA\Schema(
 *     @OA\Property(property="locationId", type="string"),
 *     @OA\Property(property="startAt", type="string"),
 *     @OA\Property(property="endAt", type="string"),
 *     @OA\Property(property="volume", type="number"),
 *     @OA\Property(property="frostLevel", type="string"),
 * )
 */
class MakeOrderRequest
{
}
