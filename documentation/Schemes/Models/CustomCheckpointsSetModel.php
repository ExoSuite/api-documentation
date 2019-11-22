<?php

/**
 * @OA\Schema(
 *     schema="CustomCheckpointsSetModel",
 *     required={"id", "location"}
 *  )
 */
class CustomCheckpointsSetModel
{
    /**
     * @OA\Property(type="number", example=1)
     */
    public $id;

    /**
     * @var array
     * @OA\Property(type="array", @OA\Items(type="array",  @OA\Items(type="number"), example={"longitude : 3.14",
     *     "latitude : 42.0"}))
     */
    public $location;
}