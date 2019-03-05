<?php
/**
 * Created by PhpStorm.
 * User: dupil_l
 * Date: 19-03-02
 * Time: 18:04
 */

/**
 * @OA\Schema(
 *     schema="GetAmIFollowingResponse",
 *     required={"status"}
 *  )
 */
class GetAmIFollowingResponse
{
    /**
     * @var boolean
     * @OA\Property()
     */
    public $status;

}