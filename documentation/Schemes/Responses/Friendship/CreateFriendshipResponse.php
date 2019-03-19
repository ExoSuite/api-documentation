<?php
/**
 * Created by PhpStorm.
 * User: dupil_l
 * Date: 19-03-02
 * Time: 19:52
 */

/**
 * @OA\Schema(
 *     schema="CreateFriendshipResponse",
 *     required={"friendship_id", "user_id", "friend_id"}
 *  )
 */
class CreateFriendshipResponse
{
    /**
     * @OA\Property(type="string", format="uuid")
     */
    public $friendship_id;

    /**
     * @OA\Property(type="string", format="uuid")
     */
    public $user_id;

    /**
     * @OA\Property(type="string", format="uuid")
     */
    public $friend_id;

}