<?php
/**
 * Created by PhpStorm.
 * User: loiclopez
 * Date: 2019-03-09
 * Time: 15:31
 */


/**
 * @OA\Schema(
 *     schema="NotificationMessageModel",
 *     required={"id", "type", "notifiable_type", "notifiable_id"}
 *  )
 */
class NotificationMessageModel extends UseTimestampNotificationModel
{
    /**
     * @OA\Property(type="string", format="uuid")
     */
    public $id;

    /**
     * @OA\Property(type="string", example="App\Notifications\NewGroupNotification")
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

    /**
     * @OA\Property(ref="#/components/schemas/NotificationModelMessageData")
     */
    public $data;
}


/**
 * @OA\Schema(
 *     schema="NotificationModelMessageData",
 *     required={"data", "notification_type"}
 *  )
 */
class NotificationModelMessageData {
    /**
     * @OA\Property(ref="#/components/schemas/MessageModel")
     */
    public $data;

    /**
     * @OA\Property(ref="#/components/schemas/NotificationType")
     */
    public $notification_type;
}
