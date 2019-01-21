<?php
/**
 * Created by PhpStorm.
 * UserResponse: loiclopez
 * Date: 2019-01-20
 * Time: 20:53
 */

/**
 * @OA\Schema(
 *     schema="Register",
 *     required={"first_name","last_name", "email", "password","password_confirmation"}
 *  )
 */
class Register
{

    /**
     * @var string
     * @OA\Property()
     */
    public $first_name;

    /**
     * @var string
     * @OA\Property()
     */
    public $last_name;

    /**
     * @var string
     * @OA\Property()
     */
    public $email;

    /**
     * @var string
     * @OA\Property()
     */
    public $nick_name;

    /**
     * @var string
     * @OA\Property()
     */
    public $password;

    /**
     * @var string
     * @OA\Property()
     */
    public $password_confirmation;
}