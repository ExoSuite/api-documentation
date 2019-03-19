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
     * @OA\Property(type="string", description="contenu du commentaire")
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