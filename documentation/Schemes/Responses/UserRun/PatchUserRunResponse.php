<?php

/**
 * @OA\Schema(
 *     schema="PatchUserRunResponse",
 *     required={"id", "run_id", "user_id", "final_time", "created_at", "updated_at"}
 *  )
 */
class PatchUserRunResponse
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
     * @OA\Property(type="number", example="355")
     */
    public $final_time;
}