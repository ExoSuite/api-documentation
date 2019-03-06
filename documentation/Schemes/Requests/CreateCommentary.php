<?php
/**
 * Created by PhpStorm.
 * User: dupil_l
 * Date: 19-03-01
 * Time: 19:51
 */

/**
 * @OA\Schema(
 *     schema="CreateCommentary",
 *     required={"content"}
 *  )
 */
class CreateCommentary
{
    /**
     * @var string
     * @OA\Property()
     */

    public $content;
}