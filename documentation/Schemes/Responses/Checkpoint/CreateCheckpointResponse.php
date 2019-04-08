<?php

/**
 * @OA\Schema(
 *     schema="CreateCheckpointResponse",
 *     required={"name","id", "visibility", "description", "creator_id"}
 *  )
 */
class CreateCheckpointResponse
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
     * @OA\Property(type="array", @OA\Items(ref="#/components/schemas/PostgisPointExample"))
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
}