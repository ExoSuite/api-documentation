<?php

/**
 * @OA\Schema(
 *     schema="GetMyFriendshipWithResponse",
 *     required={"value"}
 *  )
 */
class GetMyFriendshipWithResponse
{
    /**
     * @var boolean
     * @OA\Property(example="true|false")
     */
    public $value;
}