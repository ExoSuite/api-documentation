<?php
/**
 * Created by PhpStorm.
 * User: dupil_l
 * Date: 19-03-18
 * Time: 20:04
 */

/**
 * @OA\Schema(
 *     schema="PendingRequestModel",
 *     required={"request_id", "requester_id", "type", "target_id", "user", "created_at", "updated_at"}
 *  )
 */
class PendingRequestModel extends UseTimestampModel
{
    /**
     * @OA\Property(type="string", format="uuid")
     */
    public $request_id;

    /**
     * @OA\Property(ref="#/components/schemas/RequestTypesEnum")
     */
    public $type;

    /**
     * @OA\Property(type="string", format="uuid")
     */
    public $requester_id;

    /**
     * @OA\Property(type="string", format="uuid")
     */
    public $target_id;

    /**
     * @OA\Property(ref="#/components/schemas/UserModel")
     */
    public $user;
}