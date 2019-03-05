<?php
/**
 * Created by PhpStorm.
 * User: dupil_l
 * Date: 19-03-04
 * Time: 16:43
 */


/**
 * @OA\Schema(
 *     schema="GetlikesFromPostResponse",
 *     required={"likes_array"}
 *  )
 */
class GetlikesFromPostResponse
{
    /**
     * @var array
     * @OA\Property(@OA\Items(type="like"),
     *             example={{"like_id => 67eeab70-19f4-11e9-b4d2-476c47235c92",
     *                      "liked_id => 67eeca70-19f4-11e9-b882-476c47252c92",
     *                      "liked_type => post",
     *                      "liker_id => 67eeca70-19f4-1ae9-b822-469c47252ca7"},
     *                      {"like_id => 67eeab70-19f4-11e9-b4d2-476c47235c92",
     *                      "liked_id => 67eeca70-19f4-11e9-b882-476c47252c92",
     *                      "liked_type => post",
     *                      "liker_id => 67eeca70-19f4-1ae9-b822-469c47252ca7"}})
     */
    public $likes_array;
}