<?php

/**
 * @OA\Schema(
 *     schema="CreateTime",
 *     required={"current_time", "user_run_id"}
 *  )
 */
class CreateTime
{
    /**
     * @OA\Property(type="number", example="1554753102")
     */
    public $current_time;

    /**
     * @OA\Property(type="string", format="uuid")
     */
    public $user_run_id;
}