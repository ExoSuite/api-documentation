<?php
/**
 * Created by PhpStorm.
 * User: dupil_l
 * Date: 19-03-02
 * Time: 17:08
 */

/**
 * @OA\Schema(
 *     schema="CreateFollow",
 *     required={"user"}
 *  )
 */
class CreateFollow
{
    /**
     * @var string
     * @OA\Property()
     */
    public $user;

}