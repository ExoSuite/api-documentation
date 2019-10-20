<?php

/**
 * @OA\Schema(
 *     schema="CreateRecord",
 *     required={"user_run_id"}
 *  )
 */

class CreateRecord
{
    /**
     * @OA\Property(type="string", format="uuid")
     */
    public $user_run_id;
}