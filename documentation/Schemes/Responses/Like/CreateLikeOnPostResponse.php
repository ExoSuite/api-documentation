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
     * @OA\Property(type="string", format="uuid")
     */
    public $like_id;

    /**
     * @OA\Property(type="string", format="uuid")
     */
    public $liked_id;

    /**
     * @OA\Property(type="string")
     */
    public $liked_type;

    /**
     * @OA\Property(type="string", format="uuid")
     */
    public $liker_id;

}