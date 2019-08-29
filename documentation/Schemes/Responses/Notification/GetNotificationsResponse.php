<?php

/**
 * @OA\Schema(
 *     schema="GetNotificationsResponse",
 *     required={"id", "type", "notifiable_type", "notifiable_id"}
 *  )
 */
class GetNotificationsResponse extends PaginationScheme
{
    /**
     * @var array
     * @OA\Property(type="array", @OA\Items(ref="#/components/schemas/NotificationModel"))
     */
    public $data;
}
