<?php
/**
 * Created by PhpStorm.
 * User: dupil_l
 * Date: 19-03-02
 * Time: 19:27
 */

/**
 * @OA\Schema(
 *     schema="GetFriendshipsResponse",
 *     required={"friendships_array"}
 *  )
 */
class GetFriendshipsResponse
{
    /**
     * @var array
     * @OA\Property(type="array", @OA\Items(ref="#/components/schemas/FriendshipModel"))
     */
    public $friendships_array;
}