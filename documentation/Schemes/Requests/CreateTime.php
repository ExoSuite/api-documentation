<?php

/**
 * @OA\Schema(
 *     schema="CreateTime",
 *     required={"current_time"}
 *  )
 */
class CreateTime
{
    /**
     * @OA\Property(type="number", example="1554753102")
     */
    public $current_time;
}