<?php
/**
 * Created by PhpStorm.
 * User: dupil_l
 * Date: 19-03-09
 * Time: 23:01
 */

/**
 * @OA\Schema(
 *     schema="PostModel",
 *     required={"id", "content", "dashboard_id", "author_id", "created_at", "updated_at"}
 *  )
 */
class PostModel extends UseTimestampModel
{
    /**
     * @OA\Property(type="string", format="uuid")
     */
    public $id;

    /**
     * @OA\Property(type="string", example="this is a post.")
     */
    public $contents;

    /**
     * @OA\Property(type="string", format="uuid")
     */
    public $dashboard_id;

    /**
     * @OA\Property(type="string", format="uuid")
     */
    public $author_id;

}