<?php
/**
 * Created by PhpStorm.
 * UserResponse: loiclopez
 * Date: 2019-01-20
 * Time: 20:50
 */

/**
 * @OA\Schema(
 *     schema="Login",
 *     required={"email", "password"},
 *  )
 */
class Login
{

    /**
     * @var string
     * @OA\Property(example="foo@bar.com")
     */
    public $email;

    /**
     * @var string
     * @OA\Property()
     */
    public $password;
}