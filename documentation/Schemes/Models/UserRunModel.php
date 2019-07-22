<?php

/**
 * @OA\Schema(
 *     schema="UserRunModel",
 *     required={"id", "run_id", "user_id", "final_time", "created_at", "updated_at"}
 *  )
 */
class UserRunModel extends UseTimestampModel
{
    /**
     * @OA\Property(type="string", format="uuid")
     */
    public $id;

    /**
     * @OA\Property(type="string", format="uuid")
     */
    public $run_id;

    /**
     * @OA\Property(type="string", format="uuid")
     */
    public $user_id;

    /**
     * @OA\Property(type="number", example="458")
     */
    public $final_time;

    /**
     * @var array
     * @OA\Property(type="array", @OA\Items(ref="#/components/schemas/TimeModel"))
     * Only present in GET requests
     */
    public $times;
}