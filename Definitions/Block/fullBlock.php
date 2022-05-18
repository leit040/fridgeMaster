<?php

declare(strict_types=1);

namespace App\Definitions;

/**
 * @OA\Schema(
 *     @OA\Property(property="id", type="integer"),
 *     @OA\Property(property="location", type="object", ref="#/components/schemas/Location"),
 *     @OA\Property(property="code", type="string"),
 *     @OA\Property(property="created_at", type="string"),
 *     @OA\Property(property="updated_at", type="string"),
 *     @OA\Property(property="frostLevel", type="string"),
 * )
 */
class fullBlock
{
}
