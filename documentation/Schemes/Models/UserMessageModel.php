<?php

/**
 * @OA\Schema(
 *     schema="UserMessageModel",
 *     required={"id", "first_name", "last_name", "nick_name"}
 *  )
 */
class UserMessageModel
{
    /**
     * @OA\Property(type="string", format="uuid")
     */
    public $id;

    /**
     * @OA\Property(type="string", example="John")
     */
    public $first_name;

    /**
     * @OA\Property(type="string", example="Doe")
     */
    public $last_name;

    /**
     * @OA\Property(type="string", example="JDoe")
     */
    public $nick_name;
}
