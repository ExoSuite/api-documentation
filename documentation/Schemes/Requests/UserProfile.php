<?php

/**
 * @OA\Schema(
 *     schema="UserProfile"
 *  )
 */
class UserProfile
{
    /**
     * @var DateTime
     * @OA\Property(description="Date in UTC Format YYYY-MM-DD")
     */
    public $birthday;

    /**
     * @var string
     * @OA\Property()
     */
    public $description;

    /**
     * @var string
     * @OA\Property()
     */
    public $city;
}
