<?php

/**
 * @OA\Schema(
 *     schema="CheckpointModel",
 *     required={"id", "type", "location", "run_id", "previous_checkpoint_id", "created_at", "updated_at"}
 *  )
 */
class CheckpointModel extends UseTimestampModel
{
    /**
     * @OA\Property(type="string", format="uuid")
     */
    public $id;

    /**
     * @OA\Property(type="string", ref="#/components/schemas/CheckpointType")
     */
    public $type;

    /**
     *
     * @var array
     * @OA\Property(type="array", @OA\Items(type="array",  @OA\Items(type="number"), example={"longitude : 3.14",
     *     "latitude : 42.0"}))
     */
    public $location;

    /**
     * @OA\Property(type="string", format="uuid")
     */
    public $run_id;

    /**
     * @OA\Property(type="string", format="uuid")
     */
    public $previous_checkpoint_id;

    /**
     * @OA\Property(type="array", @OA\Items(ref="#/components/schemas/TimeModel"))
     */
    public $times;
}