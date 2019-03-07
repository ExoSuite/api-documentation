<?php
/**
 * Created by PhpStorm.
 * User: dupil_l
 * Date: 19-03-01
 * Time: 19:56
 */

/**
 * @OA\Schema(
 *     schema="CreateCommentaryResponse",
 *     required={"content", "id", "post_id", "author_id"}
 *  )
 */
class CreateCommentaryResponse
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
