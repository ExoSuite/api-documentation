<?php
/**
 * Created by PhpStorm.
 * User: dupil_l
 * Date: 19-03-18
 * Time: 16:45
 */

/**
 * @OA\Schema(
 *     schema="FollowingModel",
 *     required={"id", "user_id", "followed_id", "following", "created_at", "updated_at"}
 *  )
 */
class FollowingModel extends UseTimestampModel
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
    public $following;
}