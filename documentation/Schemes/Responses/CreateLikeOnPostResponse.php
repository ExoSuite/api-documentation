<?php
/**
 * Created by PhpStorm.
 * User: dupil_l
 * Date: 19-03-04
 * Time: 16:13
 */

/**
 * @OA\Schema(
 *     schema="CreateLikeOnPostResponse",
 *     required={"like_id", "liked_id", "liked_type", "liker_id"}
 *  )
 */
class CreateLikeOnPostResponse
{
    /**
     * @var string
     * @OA\Property()
     */
    public $like_id;

    /**
     * @var string
     * @OA\Property()
     */
    public $liked_id;

    /**
     * @var string
     * @OA\Property()
     */
    public $liked_type;

    /**
     * @var string
     * @OA\Property()
     */
    public $liker_id;

}