<?php

/**
 * @OA\Schema(
 *     schema="GetMyFriendshipWithResponse",
 *     required={"value", "friendship_entity"}
 *  )
 */
class GetMyFriendshipWithResponse
{
    /**
     * @var boolean
     * @OA\Property(example=true)
     */
    public $value;

    /**
     * @OA\Property(ref="#/components/schemas/FriendshipModel")
     */
    public $friendship_entity;
}