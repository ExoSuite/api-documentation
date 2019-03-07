<?php
/**
 * Created by PhpStorm.
 * User: dupil_l
 * Date: 19-03-01
 * Time: 17:25
 */

/**
 * @OA\Schema(
 *     schema="CreatePost",
 *     required={"content"}
 *  )
 */
class CreatePost
{
    /**
     * @var string
     * @OA\Property()
     */
    public $content;
}
