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
    public $dashboard_id;

    /**
     * @var string
     * @OA\Property()
     */
    public $author_id;

}
