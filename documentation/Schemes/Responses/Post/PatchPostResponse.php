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

    /**
     * @OA\Property(type="string")
     */
    public $content;
}