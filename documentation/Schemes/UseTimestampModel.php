<?php
/**
 * Created by PhpStorm.
 * User: loiclopez
 * Date: 2019-03-12
 * Time: 01:27
 */

/**
 * @OA\Schema(
 *     schema="UseTimeStampModel"
 *  )
 */
abstract class UseTimestampModel
{
    /**
     * @OA\Property(type="string", format="date")
     */
    public $created_at;

    /**
     * @OA\Property(type="string", format="date")
     */
    public $updated_at;
}
