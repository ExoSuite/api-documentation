<?php

/**
 * @OA\Schema(
 *     schema="CreateRun",
 *     required={"name"}
 *  )
 */
class CreateRun
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