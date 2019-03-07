<?php
/**
 * Created by PhpStorm.
 * User: dupil_l
 * Date: 19-01-26
 * Time: 17:01
 */

/** @OA\Schema(
 *     schema="PatchDashboardRestrictionResponse",
 *     required={"restriction status"}
 *  )
 */
class PatchDashboardRestrictionResponse
{

    /**
     * @var string
     * @OA\Property()
     */
    public $restriction_status;
}
