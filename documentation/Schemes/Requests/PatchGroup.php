<?php
/**
 * Created by PhpStorm.
 * User: stan
 * Date: 23/01/19
 * Time: 17:32
 */


/**
 * @OA\Schema(
 *     schema="PatchGroup",
 *     required={"request_type"}
 *  )
 */
class PatchGroup
{
    /**
     * @var string
     * @OA\Property(ref="#/components/schemas/UpdateGroupRequestType")
     */
    public $request_type;

    /**
     * @var string
     * @OA\Property(example="add4ac90-1f28-11e9-bab5-134fb5cf2ffe")
     */
    public $user_id;

    /**
     * @var bool
     * @OA\Property(example="true")
     */
    public $is_admin;

    /**
     * @var string
     * @OA\Property(example="Generic Name")
     */
    public $name;
}
