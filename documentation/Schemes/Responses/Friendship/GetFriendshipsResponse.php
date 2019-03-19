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
     * @OA\Property(@OA\Items(type="friendships"),
     *             example={{"friendship_id => 67eeab70-19f4-11e9-b4d2-476c47235c92",
     *                      "user_id => 67eeca70-19f4-11e9-b882-476c47252c92",
     *                      "friend_id => 67eeca70-19f4-1ae9-b822-469c47252ca7"},
     *                      {"friendship_id => 67eeab70-19f4-11e9-b4d2-476c47235c92",
     *                      "user_id => 67eeca70-19f4-11e9-b882-476c47252c92",
     *                      "friend_id => 67eeca70-19f4-1ae9-b822-469c47252ca7"}})
     */
    public $friendships_array;

}