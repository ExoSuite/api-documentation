<?php
/**
 * Created by PhpStorm.
 * User: dupil_l
 * Date: 19-04-10
 * Time: 18:44
 */

/**
 * @OA\Schema(
 *     schema="ProfileRestrictions",
 *     required={"user_id", "birthday", "city", "description", "nomination_preference", "created_at", "updated_at"}
 *  )
 */
class ProfileRestrictions extends UseTimestampModel
{
    /**
     * @OA\Property(type="string", format="uuid")
     */
    public $user_id;

    /**
     * @OA\Property(ref="#/components/schemas/Restriction")
     */
    public $birthday;

    /**
     * @OA\Property(ref="#/components/schemas/Restriction")
     */
    public $city;

    /**
     * @OA\Property(ref="#/components/schemas/Restriction")
     */
    public $description;

    /**
     * @OA\Property(ref="#/components/schemas/NominationPreference")
     */
    public $nomination_preference;
}