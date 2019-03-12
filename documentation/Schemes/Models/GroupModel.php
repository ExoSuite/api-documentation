<?php
/**
 * Created by PhpStorm.
 * User: loiclopez
 * Date: 2019-03-12
 * Time: 01:11
 */

/**
 * @OA\Schema(
 *     schema="GroupModel",
 *     required={"id", "name", "created_at", "updated_at", "group_members", "latest_messages"}
 *  )
 */
class GroupModel extends UseTimestampModel
{
    /**
     * @OA\Property(type="string", format="uuid")
     */
    public $id;

    /**
     * @OA\Property(type="string", example="this is a group name")
     */
    public $name;

    /**
     * @OA\Property(type="array", @OA\Items(ref="#/components/schemas/GroupMemberModel"))
     */
    public $group_members;

    /**
     * @OA\Property(type="array", @OA\Items(ref="#/components/schemas/MessageModel"))
     */
    public $latest_messages;
}
