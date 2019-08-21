<?php
/**
 * Created by PhpStorm.
 * User: stan
 * Date: 23/01/19
 * Time: 18:29
 */

/**
 * @OA\Schema(
 *     schema="CreateMessageResponse",
 *     required={"contents", "user_id", "group_id", "id", "user"}
 *  )
 */
class CreateMessageResponse extends UseTimestampModel
{
    /**
     * @var string
     * @OA\Property(example="This is a message")
     */
    public $contents;

    /**
     * @OA\Property(type="string", format="uuid")
     */
    public $user_id;

    /**
     * @OA\Property(type="string", format="uuid")
     */
    public $group_id;

    /**
     * @OA\Property(type="string", format="uuid")
     */
    public $id;

    /**
     * @OA\Property(ref="#/components/schemas/UserMessageModel")
     */
    public $user;
}
