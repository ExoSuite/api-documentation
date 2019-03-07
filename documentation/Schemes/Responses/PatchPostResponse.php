<?php
/**
 * Created by PhpStorm.
 * User: dupil_l
 * Date: 19-03-01
 * Time: 19:26
 */

/**
 * @OA\Schema(
 *     schema="PatchPostResponse",
 *     required={"id", "dashboard_id", "author_id", "content"}
 *  )
 */
class PatchPostResponse
{
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

    /**
     * @var string
     * @OA\Property()
     */
    public $content;
}
