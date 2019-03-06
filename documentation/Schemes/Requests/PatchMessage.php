<?php
/**
 * Created by PhpStorm.
 * User: stan
 * Date: 23/01/19
 * Time: 18:42
 */

/**
 * @OA\Schema(
 *     schema="PatchMessage",
 *     required={"contents"}
 *  )
 */
class PatchMessage
{
    /**
     * @var string
     * @OA\Property(example="This is a message")
     */
    public $contents;
}