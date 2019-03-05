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
     * @var string
     * @OA\Property()
     */
    public $follow_id;

    /**
     * @var string
     * @OA\Property()
     */
    public $user_id;

    /**
     * @var string
     * @OA\Property()
     */
    public $followed_id;

}