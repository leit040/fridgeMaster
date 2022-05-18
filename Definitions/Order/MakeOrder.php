<?php

declare(strict_types=1);

namespace App\Definitions;

/**
 * @OA\Schema(
 *     @OA\Property(property="daysCount", type="string"),
 *     @OA\Property(property="price", type="string"),
 *     @OA\Property(property="accessCode", type="string"),
 *     @OA\Property(property="blockIds", type="array",@OA\Items( type="number")),
*
 * )
 */
class MakeOrder
{
}
