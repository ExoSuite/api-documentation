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
 *     required={"id", "content", "dashboard_id", "author_id", "author", "commentaries", "created_at", "updated_at"}
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

    /**
     * @OA\Property(ref="#/components/schemas/UserModel")
     */
    public $author;

    /**
     * @OA\Property(type="array", maxLength=3, @OA\Items(ref="#/components/schemas/CommentaryModel"))
     */
    public $commentaries;
}