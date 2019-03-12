<?php
/**
 * Created by PhpStorm.
 * User: loiclopez
 * Date: 2019-03-12
 * Time: 01:11
 */

/**
 * @OA\Schema(
 *     schema="GroupMemberModel",
 *     required={"group_id", "user_id", "is_admin", "created_at", "updated_at"}
 *  )
 */
class GroupMemberModel extends UseTimestampModel
{
    /**
     * @OA\Property(type="string", format="uuid")
     */
    public $group_id;

    /**
     * @OA\Property(type="string", format="uuid")
     */
    public $user_id;

    /**
     * @OA\Property(type="boolean")
     */
    public $is_admin;
}
