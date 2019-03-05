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
    public $type;

    /**
     * @var string
     * @OA\Property()
     */
    public $target_id;

}