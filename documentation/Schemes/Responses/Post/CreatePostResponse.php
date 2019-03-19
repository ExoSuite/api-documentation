<?php
/**
 * Created by PhpStorm.
 * User: dupil_l
 * Date: 19-03-01
 * Time: 17:55
 */

/**
 * @OA\Schema(
 *     schema="CreatePostResponse",
 *     required={"content", "id", "dashboard_id", "author_id"}
 *  )
 */

class CreatePostResponse
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
    public $dashboard_id;

    /**
     * @OA\Property(type="string", format="uuid")
     */
    public $author_id;

}