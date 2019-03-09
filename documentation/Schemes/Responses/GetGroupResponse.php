<?php
/**
 * Created by PhpStorm.
 * User: stan
 * Date: 23/01/19
 * Time: 18:18
 */

/**
 * @OA\Schema(
 *     schema="GetGroupResponse",
 *     required={"name","id", "group_members"}
 *  )
 */
class GetGroupResponse
{
    /**
     * @var string
     * @OA\Property()
     */
    public $name;

    /**
     * @OA\Property(type="string", format="uuid")
     */
    public $id;

    /**
     * @var array
     * @OA\Property(@OA\Items(type="string", format="uuid"),
     *             example={"67eeab70-19f4-11e9-b4d2-476c47235c92", "969fc1b0-1f28-11e9-9ac9-4da5046d4048"})
     */
    public $group_members;
}
