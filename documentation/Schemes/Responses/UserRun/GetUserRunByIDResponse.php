<?php

/**
 * @OA\Schema(
 *     schema="GetUserRunByIDResponse",
 *     required={"id", "run_id", "user_id", "final_time", "times", "created_at", "updated_at"}
 *  )
 */
class GetUserRunByIDResponse
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
     * @OA\Property(type="number", example="215")
     */
    public $final_time;

    /**
     * @var array
     * @OA\Property(type="array", @OA\Items(ref="#/components/schemas/TimeModel"))
     */
    public $times;
}