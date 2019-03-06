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
     * @var string
     * @OA\Property()
     */
    public $request_id;

    /**
     * @var string
     * @OA\Property()
     */
    public $requester_id;

    /**
     * @var string
     * @OA\Property()
     */
    public $target_id;

    /**
     * @var string
     * @OA\Property()
     */
    public $type;

}