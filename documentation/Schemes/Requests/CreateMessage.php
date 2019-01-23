<?php
/**
 * Created by PhpStorm.
 * User: stan
 * Date: 23/01/19
 * Time: 18:28
 */

/**
 * @OA\Schema(
 *     schema="CreateMessage",
 *     required={"contents"}
 *  )
 */
class CreateMessage
{
    /**
     * @var string
     * @OA\Property(example="This is a message")
     */
    public $contents;
}