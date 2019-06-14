<?php


/**
 * @OA\Schema(
 *     schema="FriendshipModel",
 *     required={"id", "user_id", "friend_id", "friend", "created_at", "updated_at"}
 *  )
 */
class FriendshipModel
{
    /**
     * @OA\Property(type="string", format="uuid")
     */
    public $id;

    /**
     * @OA\Property(type="string", format="uuid")
     */
    public $user_id;

    /**
     * @OA\Property(type="string", format="uuid")
     */
    public $followed_id;

    /**
     * @OA\Property(ref="#/components/schemas/UserModel")
     */
    public $friend;
}