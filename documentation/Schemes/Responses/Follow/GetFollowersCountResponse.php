<?php


/**
 * @OA\Schema(
 *     schema="GetFollowersCountResponse",
 *     required={
 *       "total"
 * }
 *  )
 */
class GetFollowersCountResponse
{
    /**
     * @OA\Property(type="integer", example="4")
     */
    public $total;
}