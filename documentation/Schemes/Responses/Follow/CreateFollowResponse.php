<?php
/**
 * Created by PhpStorm.
 * User: dupil_l
 * Date: 19-03-02
 * Time: 17:12
 */

/**
 * @OA\Schema(
 *     schema="CreateFollowResponse",
 *     required={"follow_id", "user_id", "followed_id"}
 *  )
 */
class CreateFollowResponse
{
    /**
     * @OA\Property(type="string", format="uuid")
     */
    public $follow_id;

    /**
     * @OA\Property(type="string", format="uuid")
     */
    public $user_id;

    /**
     * @OA\Property(type="string", format="uuid")
     */
    public $followed_id;

}