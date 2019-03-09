<?php
/**
 * Created by PhpStorm.
 * User: loiclopez
 * Date: 2019-03-09
 * Time: 15:31
 */

/**
 * @OA\Schema(
 *     schema="NotificationModel",
 *     required={"id", "type", "notifiable_type", "notifiable_id"}
 *  )
 */
class NotificationModel
{
    /**
     * @OA\Property(type="string", format="uuid")
     */
    public $id;

    /**
     * @OA\Property(ref="#/components/schemas/NotificationType")
     */
    public $type;

    /**
     * @OA\Property(type="string", example="App\Models\User")
     */
    public $notifiable_type;

    /**
     * @OA\Property(type="string", format="uuid")
     */
    public $notifiable_id;
}
