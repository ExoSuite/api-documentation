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
     * @var string
     * @OA\Property()
     */
    public $content;

    /**
     * @var string
     * @OA\Property()
     */
    public $id;

    /**
     * @var string
     * @OA\Property()
     */
    public $post_id;

    /**
     * @var string
     * @OA\Property()
     */
    public $author_id;

}
