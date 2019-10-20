<?php
/**
 * Created by PhpStorm.
 * User: loiclopez
 * Date: 2019-03-09
 * Time: 15:31
 */


/**
 * @OA\Schema(
 *     schema="NotificationGroupModel",
 *     required={"id", "type", "notifiable_type", "notifiable_id"}
 *  )
 */
class NotificationGroupModel extends UseTimestampNotificationModel
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
     * @OA\Property(ref="#/components/schemas/NotificationModelGroupData")
     */
    public $data;
}

/**
 * @OA\Schema(
 *     schema="NotificationModelGroupData",
 *     required={"data", "notification_type"}
 *  )
 */
class NotificationModelGroupData {
    /**
     * @OA\Property(ref="#/components/schemas/NotificationGroupModelDataContents")
     */
    public $data;

    /**
     * @OA\Property(ref="#/components/schemas/NotificationType")
     */
    public $notification_type;
}



/**
 * @OA\Schema(
 *     schema="NotificationGroupModelDataContents",
 *     required={"message", "group"}
 *  )
 */
class NotificationGroupModelDataContents {

    /**
     * @OA\Property(type="string", example="You were added to a new group Elenaburgh by Loïc Lopez.")
     */
    public $message;

    /**
     * @OA\Property(ref="#/components/schemas/GroupModel")
     */
    public $group;
}
