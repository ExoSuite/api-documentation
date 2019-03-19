<?php
/**
 * Created by PhpStorm.
 * User: dupil_l
 * Date: 19-03-04
 * Time: 14:18
 */

/**
 * @OA\Schema(
 *     schema="CreatePendingRequestResponse",
 *     required={"request_id", "requester_id", "type", "target_id"}
 *  )
 */
class CreatePendingRequestResponse
{
    /**
     * @OA\Property(type="string", format="uuid")
     */
    public $request_id;

    /**
     * @OA\Property(type="string", format="uuid")
     */
    public $requester_id;

    /**
     * @OA\Property(type="string", format="uuid")
     */
    public $target_id;

    /**
     * @OA\Property(ref="#/components/schemas/RequestTypesEnum")
     */
    public $type;

}