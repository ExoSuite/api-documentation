<?php
/**
 * Created by PhpStorm.
 * User: dupil_l
 * Date: 19-04-10
 * Time: 18:53
 */

/**
 * @OA\Schema(
 *     schema="UserProfileRestrictions"
 *  )
 */
class UserProfileRestrictions
{
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