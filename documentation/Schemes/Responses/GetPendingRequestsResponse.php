<?php
/**
 * Created by PhpStorm.
 * User: dupil_l
 * Date: 19-03-04
 * Time: 14:41
 */

/**
 * @OA\Schema(
 *     schema="GetPendingRequestsResponse",
 *     required={"pending_requests_array"}
 *  )
 */

class GetPendingRequestsResponse
{
    /**
     * @var array
     * @OA\Property(@OA\Items(type="pending_requests"),
     *             example={{"request_id => 67eeab70-19f4-11e9-b4d2-476c47235c92",
     *                      "requester_id => 67eeca70-19f4-11e9-b882-476c47252c92",
     *                      "type => friendship_request",
     *                      "target_id => 67eeca70-19f4-1ae9-b822-469c47252ca7"},
     *                      {"request_id => 67eeab70-19f4-11e9-b4d2-476c47235c92",
     *                      "requester_id => 67eeca70-19f4-11e9-b882-476c47252c92",
     *                      "type => friendship_request",
     *                      "target_id => 67eeca70-19f4-1ae9-b822-469c47252ca7"}})
     */
    public $pending_requests_array;

}