<?php
/**
 * Created by PhpStorm.
 * User: dupil_l
 * Date: 19-03-02
 * Time: 18:25
 */

/**
 * @OA\Schema(
 *     schema="CreateFriendshipRequestResponse",
 *     required={"request_id", "requester_id", "type", "target_id"}
 *  )
 */
class CreateFriendshipRequestResponse
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
     * @OA\Property(type="string")
     */
    public $type;

    /**
     * @OA\Property(type="string", format="uuid")
     */
    public $target_id;

}