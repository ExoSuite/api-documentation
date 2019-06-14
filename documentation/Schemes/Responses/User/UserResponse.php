<?php
/**
 * Created by PhpStorm.
 * UserResponse: loiclopez
 * Date: 2019-01-20
 * Time: 20:52
 */

/**
 * @OA\Schema(
 *     schema="UserResponse",
 *     required={"first_name","last_name", "email", "nick_name", "id", "profile", "created_at", "updated_at"}
 *  )
 */
class UserResponse extends UseTimestampModel
{
    /**
     * @OA\Property(type="string", example="jean.smith@something.xx")
     */
    public $email;

    /**
     * @OA\Property(type="string", example="Jean")
     */
    public $first_name;

    /**
     * @OA\Property(type="string", example="Smith")
     */
    public $last_name;

    /**
     * @OA\Property(type="string", example="NicknameX")
     */
    public $nick_name;

    /**
     * @var string
     * @OA\Property(type="string", format="uuid")
     */
    public $id;

    /**
     * @var \Illuminate\Database\Eloquent\Model
     * @OA\Property(ref="#/components/schemas/UserProfileModel")
     */
    public $profile;
}
