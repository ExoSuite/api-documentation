<?php

/**
 * @OA\Schema(
 *     schema="TimeModel",
 *     required={"id", "current_time", "check_point_id", "run_id", "user_run_id", "created_at", "updated_at"}
 *  )
 */
class TimeModel extends UseTimestampModel
{
    /**
     * @OA\Property(type="string", format="uuid")
     */
    public $id;

    /**
     * @OA\Property(type="number", example="1554753102")
     */
    public $current_time;

    /**
     * @OA\Property(type="string", format="uuid")
     */
    public $check_point_id;

    /**
     * @OA\Property(type="string", format="uuid")
     */
    public $run_id;

    /**
     * @OA\Property(type="string", format="uuid")
     */
    public $user_run_id;
}