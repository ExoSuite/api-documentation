<?php

/**
 * @OA\Schema(
 *     schema="PatchCheckpoint",
 *     required={"type", "location"}
 *  )
 */
class PatchCheckpoint
{
    /**
     * @var string
     * @OA\Property(ref="#/components/schemas/CheckpointType")
     */
    public $type;

    /**
     * @var array
     * @OA\Property(type="array", @OA\Items(type="array",  @OA\Items(type="number"), example={"longitude : 3.14",
     *     "latitude : 42.0"}))
     */
    public $location;
}