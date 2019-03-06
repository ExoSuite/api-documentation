<?php
/**
 * Created by PhpStorm.
 * User: stan
 * Date: 23/01/19
 * Time: 19:15
 */

/**
 * @OA\Schema(
 *     schema="GetNotificationResponse",
 *     required={"notifications_array", "id", "type", "notifiable_type", "data", "notifiable_id"}
 *  )
 */
class GetNotificationResponse
{
    /**
     * @var array
     * @OA\Property(@OA\Items(type="notification"),
     *             example={"id => 6e257e62-5e53-4460-8f8a-1a9a2c65553f",
     *                      "type => App\Notifications\NewGroupNotification",
     *                      "notifiable_type => App\Models\User",
     *                      "notifiable_id => 6d356570-1f3a-11e9-9be8-e747d3b1f085",
     *                      "data => array:2 [ message => You were added to a new group nuMaYRsj88etabUviPiscytZCln6HL4cyhKOUkmPwocUNjcxMyljRB7sjsiLxqMNbl9wEF6LbRKWFtsC5r1M4RuDjv6MUUHTZ8Y5 by Kaden Weissnat ...]"})
     */
    public $notifications_array;
}