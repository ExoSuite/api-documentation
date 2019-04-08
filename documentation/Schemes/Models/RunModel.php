<?php

/**
 * @OA\Schema(
 *     schema="RunModel",
 *     required={"id", "description", "creator_id", "visibility", "name", "created_at", "updated_at"}
 *  )
 */
class RunModel extends UseTimestampModel
{
    /**
     * @OA\Property(type="string", format="uuid")
     */
    public $id;

    /**
     * @OA\Property(type="string", example="This is a description.")
     */
    public $description;

    /**
     * @OA\Property(type="string", format="uuid")
     */
    public $creator_id;

    /**
     * @OA\Property(type="string", ref="#/components/schemas/VisibilityType")
     */
    public $visibility;

    /**
     * @OA\Property(type="string", example="This is a name.")
     */
    public $name;

    /**
     * @OA\Property(type="array", @OA\Items(ref="#/components/schemas/CheckpointModel"))
     */
    public $checkpoints;
}