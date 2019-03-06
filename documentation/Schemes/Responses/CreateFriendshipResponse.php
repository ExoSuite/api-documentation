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
     * @var string
     * @OA\Property()
     */
    public $friendship_id;

    /**
     * @var string
     * @OA\Property()
     */
    public $user_id;

    /**
     * @var string
     * @OA\Property()
     */
    public $friend_id;

}