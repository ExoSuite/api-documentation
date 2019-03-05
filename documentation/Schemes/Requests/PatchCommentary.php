<?php
/**
 * Created by PhpStorm.
 * User: dupil_l
 * Date: 19-03-01
 * Time: 20:13
 */

/**
 * @OA\Schema(
 *     schema="PatchCommentary",
 *     required={"content"}
 *  )
 */

class PatchCommentary
{
    /**
     * @var string
     * @OA\Property()
     */
    public $content;

}