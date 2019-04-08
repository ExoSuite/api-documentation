<?php

/**
 * @OA\Schema(
 *     schema="CreateCheckpoint",
 *     required={"type", "location"}
 *  )
 */
class CreateCheckpoint
{
    /**
     * @var string
     * @OA\Property(ref="#/components/schemas/CheckpointType")
     */
    public $type;

    /**
     * @OA\Property(type="array", @OA\Items(ref="#/components/schemas/PostgisPointExample"))
     */
    public $location;
}