<?php
/**
 * Created by PhpStorm.
 * User: dupil_l
 * Date: 19-03-01
 * Time: 20:14
 */

/**
 * @OA\Schema(
 *     schema="PatchCommentaryResponse",
 *     required={"id", "post_id", "author_id", "content"}
 *  )
 */

class PatchCommentaryResponse
{
    /**
     * @OA\Property(type="string")
     */
    public $content;

    /**
     * @OA\Property(type="string", format="uuid")
     */
    public $id;

    /**
     * @OA\Property(type="string", format="uuid")
     */
    public $post_id;

    /**
     * @OA\Property(type="string", format="uuid")
     */
    public $author_id;

}