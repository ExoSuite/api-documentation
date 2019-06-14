<?php


/**
 * @OA\Schema(
 *     schema="GetFollowsResponse",
 *     required={
 *       "data", "first_page_url", "from", "last_page",
 *       "next_page_url", "last_page_url", "path", "per_page", "prev_page_url", "to", "total"
 *     }
 *  )
 */
class GetFollowsResponse
{
    /**
     * @var array
     * @OA\Property(type="array", @OA\Items(ref="#/components/schemas/FollowingModel"))
     */
    public $data;

}