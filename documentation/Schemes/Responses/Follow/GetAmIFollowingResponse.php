<?php
/**
 * Created by PhpStorm.
 * User: dupil_l
 * Date: 19-03-02
 * Time: 18:04
 */

/**
 * @OA\Schema(
 *     schema="GetAmIFollowingResponse",
 *     required={"user_id", "id", "followed_id", "created_at", "updated_at"}
 *  )
 */
class GetAmIFollowingResponse extends UseTimestampModel
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
}