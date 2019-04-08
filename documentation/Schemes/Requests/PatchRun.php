<?php

/**
 * @OA\Schema(
 *     schema="PatchRun",
 *     required={}
 *  )
 */
class PatchRun
{
    /**
     * @var string
     * @OA\Property(example="This is a name")
     */
    public $name;

    /**
     * @var string
     * @OA\Property(example="This is a description")
     */
    public $description;

    /**
     * @var string
     * @OA\Property(ref="#/components/schemas/VisibilityType")
     */
    public $visibility;
}