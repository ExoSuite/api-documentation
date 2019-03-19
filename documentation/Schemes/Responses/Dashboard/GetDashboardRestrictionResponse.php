<?php
/**
 * Created by PhpStorm.
 * User: dupil_l
 * Date: 19-01-26
 * Time: 17:16
 */

/** @OA\Schema(
 *     schema="GetDashboardRestrictionResponse",
 *     required={"visibility", "writing_restriction"}
 *  )
 */

class GetDashboardRestrictionResponse
{
    /**
     * @OA\Property(ref="#/components/schemas/Restriction")
     */
    public $visibility;

    /**
     * @OA\Property(ref="#/components/schemas/Restriction")
     */
    public $writing_restriction;
}