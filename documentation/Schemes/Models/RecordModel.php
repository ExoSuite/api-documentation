<?php

/**
 * @OA\Schema(
 *     schema="RecordModel",
 *     required={"id", "run_id", "best_time", "best_time_run_id", "sum_of_best", "user_id", "best_segments",
 *     "total_distance", "average_speed_on_best_time", "distance_between_cps", "best_speed_between_cps", "created_at", "updated_at"}
 *  )
 */
class RecordModel extends UseTimestampModel
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
     * @OA\Property(type="number", example="42")
     */
    public $best_time;

    /**
     * @OA\Property(type="string", format="uuid")
     */
    public $best_time_run_id;

    /**
     * @OA\Property(type="number", example="104")
     */
    public $sum_of_best;

    /**
     * @OA\Property(type="string", format="uuid")
     */
    public $user_id;

    /**
     * @OA\Property(type="array", @OA\Items(type="number"))
     */
    public $best_segments;

    /**
     * @OA\Property(type="number", example="2.385")
     */
    public $total_distance;

    /**
     * @OA\Property(type="number", example="11.541")
     */
    public $average_speed_on_best_time;

    /**
     * @OA\Property(type="array", @OA\Items(type="number"))
     */
    public $distance_between_cps;

    /**
     * @OA\Property(type="array", @OA\Items(type="number"))
     */
    public $best_speed_between_cps;
}