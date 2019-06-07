<?php


/**
 * @OA\Schema(
 *     schema="UserModel",
 *     required={"id", "first_name", "last_name", "email", "nick_name", "created_at", "updated_at"}
 *  )
 */
class UserModel extends UseTimestampModel
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
     * @OA\Property(type="string", example="Walter")
     */
    public $last_name;

    /**
     * @OA\Property(type="string", format="email")
     */
    public $email;

    /**
     * @OA\Property(type="string", example="Nickname")
     */
    public $nick_name;
}