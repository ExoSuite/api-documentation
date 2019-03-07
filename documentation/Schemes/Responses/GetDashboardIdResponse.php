<?php
/**
 * Created by PhpStorm.
 * User: dupil_l
 * Date: 19-01-26
 * Time: 17:29
 */

/**
 * @OA\Schema(
 *     schema="GetDashboardIdResponse",
 *     required={"dashboard_id"}
 *  )
 */
class GetDashboardIdResponse
{
    /**
     * @var string
     * @OA\Property()
     */
    public $dashboard_id;
}
