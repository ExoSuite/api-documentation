<?php
/**
 * Created by PhpStorm.
 * User: stan
 * Date: 23/01/19
 * Time: 16:56
 */

/**
 * @OA\Schema(
 *     schema="CreateGroup",
 *     required={"users"}
 *  )
 */
class CreateGroup
{
    /**
     * @var array
     * @OA\Property(@OA\Items(type="string"),
     *              example={"67eeab70-19f4-11e9-b4d2-476c47235c92", "969fc1b0-1f28-11e9-9ac9-4da5046d4048"})
     */
    public $users;

    /**
     * @var string
     * @OA\Property()
     */
    public $name;
}
