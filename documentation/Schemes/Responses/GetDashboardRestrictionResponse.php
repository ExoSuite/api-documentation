<?php
/**
 * Created by PhpStorm.
 * User: dupil_l
 * Date: 19-01-26
 * Time: 17:16
 */

/** @OA\Schema(
 *     schema="GetDashboardRestrictionResponse",
 *     required={"restriction"}
 *  )
 */

class GetDashboardRestrictionResponse
{
    /**
     * @var string
     * @OA\Property()
     */
    public $restriction;
}