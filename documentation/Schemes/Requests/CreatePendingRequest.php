<?php
/**
 * Created by PhpStorm.
 * User: dupil_l
 * Date: 19-03-04
 * Time: 11:56
 */

/**
 * @OA\Schema(
 *     schema="CreatePendingRequest",
 *     required={"type"}
 *  )
 */

class CreatePendingRequest
{
    /**
     * @var string
     * @OA\Property()
     */
    public $type;

}