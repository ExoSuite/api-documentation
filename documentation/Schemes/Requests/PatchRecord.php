<?php

/**
 * @OA\Schema(
 *     schema="PatchRecord",
 *     required={"user_run_id"}
 *  )
 */
class PatchRecord
{
    /**
     * @OA\Property(type="string", format="uuid")
     */
    public $user_run_id;
}