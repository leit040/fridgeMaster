<?php

declare(strict_types=1);

namespace App\Definitions;

/**
 * @OA\Schema(
 *     @OA\Property(property="name", type="string"),
 *     @OA\Property(property="address", type="string"),
 *     @OA\Property(property="support contact", type="string"),
 *     @OA\Property(property="phone", type="string"),
 *     @OA\Property(property="pricePerHighLevel", type="number"),
 *     @OA\Property(property="pricePerMediumLevel", type="number"),
 *     @OA\Property(property="pricePerLowLevel", type="number"),
 * )
 */
class CreateLocation
{
}
