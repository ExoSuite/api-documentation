<?php
/**
 * Created by PhpStorm.
 * UserResponse: loiclopez
 * Date: 2019-01-20
 * Time: 20:52
 */

use Webpatser\Uuid\Uuid;

/**
 * @OA\Schema(
 *     schema="UserResponse",
 *     required={"first_name","last_name", "email", "nick_name", "id"}
 *  )
 */
class UserResponse
{
    /**
     * @var string
     * @OA\Property()
     */
    public $email;

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
    public $nick_name;

    /**
     * @var string
     * @OA\Property(example="b01126c8-1d1f-11e9-ab14-d663bd873d93")
     */
    public $id;
}
