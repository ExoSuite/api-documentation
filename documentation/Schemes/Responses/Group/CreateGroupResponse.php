<?php
/**
 * Created by PhpStorm.
 * User: stan
 * Date: 23/01/19
 * Time: 17:05
 */


/**
 * @OA\Schema(
 *     schema="CreateGroupResponse",
 *     required={"id", "name", "created_at", "updated_at", "group_members",}
 *  )
 */
class CreateGroupResponse extends UseTimestampModel
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
}
