<?php
/**
 * Created by PhpStorm.
 * User: dupil_l
 * Date: 19-03-18
 * Time: 16:35
 */

/**
 * @OA\Schema(
 *     schema="CommentaryModel",
 *     required={"id", "content", "post_id", "author_id", "author", "created_at", "updated_at"}
 *  )
 */
class CommentaryModel extends UseTimestampModel
{
    /**
     * @OA\Property(type="string", format="uuid")
     */
    public $id;

    /**
     * @OA\Property(type="string", example="this is a post.")
     */
    public $content;

    /**
     * @OA\Property(type="string", format="uuid")
     */
    public $post_id;

    /**
     * @OA\Property(type="string", format="uuid")
     */
    public $author_id;

    /**
     * @OA\Property(ref="#/components/schemas/UserModel")
     */
    public $author;

}