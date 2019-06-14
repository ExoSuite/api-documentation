<?php
/**
 * Created by PhpStorm.
 * User: dupil_l
 * Date: 19-04-10
 * Time: 17:52
 */

/**
 * @OA\Schema(
 *     schema="UserProfileModel",
 *     required={"id", "birthday", "city", "description", "avatar_id", "cover_id", "created_at", "updated_at"}
 *  )
 */
class UserProfileModel extends UseTimestampModel
{
    /**
     * @OA\Property(type="string", format="uuid")
     */
    public $id;

    /**
     * @OA\Property(type="date", example="2000-01-01")
     */
    public $birthday;

    /**
     * @OA\Property(type="string", format="Ville")
     */
    public $city;

    /**
     * @OA\Property(type="string", format="C'est une description")
     */
    public $description;

    /**
     * @OA\Property(type="string", format="uuid")
     */
    public $avatar_id;

    /**
     * @OA\Property(type="string", format="uuid")
     */
    public $cover_id;

}