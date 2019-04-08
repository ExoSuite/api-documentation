<?php

/**
 * @OA\Schema(
 *     schema="CreateRunResponse",
 *     required={"name","id", "visibility", "description", "creator_id"}
 *  )
 */
class CreateRunResponse
{
    /**
     * @var string
     * @OA\Property(example="This is a name")
     */
    public $name;

    /**
     * @var string
     * @OA\Property(example="e3128fa0-5a18-11e9-8869-e920492aee8b")
     */
    public $id;

    /**
     * @var string
     * @OA\Property(ref="#/components/schemas/VisibilityType")
     */
    public $visibility;

    /**
     * @var string
     * @OA\Property(example="e3128fa0-5a18-11e9-8869-e921864az8ct")
     */
    public $creator_id;

    /**
     * @var string
     * @OA\Property(example="This is a description")
     */
    public $description;
}