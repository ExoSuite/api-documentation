<?php
/**
 * Created by PhpStorm.
 * User: dupil_l
 * Date: 19-03-02
 * Time: 17:39
 */

/**
 * @OA\Schema(
 *     schema="GetFollowersResponse",
 *     required={"follows_array"}
 *  )
 */
class GetFollowersResponse
{
    /**
     * @var array
     * @OA\Property(@OA\Items(type="string"),
     *             example={
     *                      "67eeab70-19f4-11e9-b4d2-476c47235c92",
     *                      "67eeab70-19f4-11e9-b4d2-476c47235c92",
     *                      "67eeab70-19f4-11e9-b4d2-476c47235c92"
     *                      })
     */
    public $followers_id;

}