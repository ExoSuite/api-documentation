<?php
/**
 * Created by PhpStorm.
 * User: loiclopez
 * Date: 2019-03-09
 * Time: 16:45
 */

/**
 * @OA\Schema(
 *     schema="MessageModel",
 *     required={"id", "contents", "group_id", "user_id", "created_at", "updated_at"}
 *  )
 */
class MessageModel
{
    /**
     * @OA\Property(type="string", format="uuid")
     */
    public $id;

    /**
     * @OA\Property(type="string", example="this is a message.")
     */
    public $contents;

    /**
     * @OA\Property(type="string", format="uuid")
     */
    public $group_id;

    /**
     * @OA\Property(type="string", format="uuid")
     */
    public $user_id;

    /**
     * @OA\Property(type="string", format="date")
     */
    public $created_at;

    /**
     * @OA\Property(type="string", format="date")
     */
    public $updated_at;
}
