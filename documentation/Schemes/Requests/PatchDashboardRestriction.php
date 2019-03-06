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
 *      required={"restriction"}
 *  )
**/

class PatchDashboardRestriction
{

    /**
     * @var string
     * @OA\Property()
     */
    public $restriction;
}