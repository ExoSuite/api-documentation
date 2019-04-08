<?php

/**
 * @OA\Schema(
 *     schema="PatchTime",
 *     required={"current_time"}
 *  )
 */
class PatchTime
{
    /**
     * @OA\Property(type="number", example="1554753102")
     */
    public $current_time;
}