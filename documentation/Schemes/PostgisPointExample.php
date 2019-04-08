<?php

/**
 * @OA\Schema(
 *     schema="PostgisPointExample"
 *  )
 */
class PostgisPointExample
{
    /**
     * @OA\Property(type="number")
     */
    public $longitude;

    /**
     * @OA\Property(type="number")
     */
    public $latitude;
}