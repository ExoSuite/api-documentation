<?php
/**
 * Created by PhpStorm.
 * User: dupil_l
 * Date: 19-01-26
 * Time: 15:29
 */

/**
 * @OA\Schema(
 *      schema="PatchDashboardRestriction",
 *      required={"restriction_field", "restriction_level"}
 *  )
 **/
class PatchDashboardRestriction
{
    /**
     * @OA\Property(ref="#/components/schemas/RestrictionFields")
     */
    public $restriction_field;

    /**
     * @OA\Property(ref="#/components/schemas/Restriction")
     */
    public $restriction_level;
}
