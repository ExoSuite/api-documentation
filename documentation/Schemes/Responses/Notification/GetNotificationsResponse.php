<?php

/**
 * @OA\Schema(
 *     schema="GetNotificationsResponse",
 *     required={
 *       "data", "first_page_url", "from", "last_page",
 *       "next_page_url", "last_page_url", "path", "per_page", "prev_page_url", "to", "total"
 *     }
 *  )
 */
class GetNotificationsResponse extends PaginationScheme
{
    /**
     * @var array
     * @OA\Property(type="array", @OA\Items(anyOf={
     *       @OA\Property(ref="#/components/schemas/NotificationMessageModel"),
     *       @OA\Property(ref="#/components/schemas/NotificationGroupModel"),
     *    }
     *   )
     * )
     */
    public $data;
}
