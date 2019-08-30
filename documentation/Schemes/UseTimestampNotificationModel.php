<?php
/**
 * Created by PhpStorm.
 * User: loiclopez
 * Date: 2019-03-12
 * Time: 01:27
 */

/**
 * @OA\Schema(
 *     schema="UseTimestampNotificationModel"
 *  )
 */
abstract class UseTimestampNotificationModel
{
    /**
     * @OA\Property(type="string", format="date")
     */
    public $created_at;

    /**
     * @OA\Property(type="string", format="date")
     */
    public $updated_at;

    /**
     * @OA\Property(type="string", format="date")
     */
    public $read_at;
}
