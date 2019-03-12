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
 *     required={"name","id", "group_members"}
 *  )
 */
class CreateGroupResponse
{
    /**
     * @var string
     * @OA\Property()
     */
    public $name;

    /**
     * @var string
     * @OA\Property()
     */
    public $id;

    /**
     * @var array
     * @OA\Property(@OA\Items(type="groupMembers"),
     *             example={{"group_id => 5e3ca190-1f37-11e9-848e-6b01c8780ed9",
     *                      "user_id => 5df235a0-1f37-11e9-bed4-3570bfe1f166",
     *                      "is_admin => true"},
     *                      {"group_id => 5e3ca190-1f37-11e9-848e-6b01c8780ed9",
     *                      "user_id => 5e10eba0-1f37-11e9-9e54-2db3cf51e0aa",
     *                      "is_admin => false"}})
     */
    public $group_members;
}