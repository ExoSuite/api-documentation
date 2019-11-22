<?php

/**
 * @OA\Schema(
 *     schema="CreateCheckpoints",
 *     required={"data"}
 *  )
 */
class CreateCheckpoints
{
    /**
     * @var array
     * @OA\Property(type="array", @OA\Items(ref="#/components/schemas/CustomCheckpointsSetModel"))
     */
    public $data;
}