<?php

/**
 * @OA\Schema(
 *     schema="GetCheckpointsResponse",
 *     required={
 *       "data", "first_page_url", "from", "last_page",
 *       "next_page_url", "last_page_url", "path", "per_page", "prev_page_url", "to", "total"
 *     }
 *  )
 */
class GetCheckpointsResponse extends PaginationScheme
{
    /**
     * @var array
     * @OA\Property(type="array", @OA\Items(ref="#/components/schemas/CheckpointModel"))
     */
    public $data;

}