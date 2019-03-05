<?php
/**
 * Created by PhpStorm.
 * User: dupil_l
 * Date: 19-03-01
 * Time: 19:15
 */

/**
 * @OA\Schema(
 *     schema="PatchPost",
 *     required={"content"}
 *  )
 */

class PatchPost
{
    /**
     * @var string
     * @OA\Property()
     */
    public $content;

}