<?php
/**
 * Created by PhpStorm.
 * User: dupil_l
 * Date: 19-03-18
 * Time: 16:40
 */

/**
 * @OA\Schema(
 *     schema="LikeModel",
 *     required={"like_id", "liked_id", "liked_type", "liker_id", "created_at", "updated_at"}
 *  )
 */
class LikeModel extends UseTimestampModel
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
     * @OA\Property(ref="#/components/schemas/LikableEntities")
     */
    public $liked_type;

    /**
     * @OA\Property(type="string", format="uuid")
     */
    public $liker_id;

}