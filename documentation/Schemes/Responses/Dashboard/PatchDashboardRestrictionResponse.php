<?php
/**
 * Created by PhpStorm.
 * User: dupil_l
 * Date: 19-01-26
 * Time: 17:01
 */

/** @OA\Schema(
 *     schema="PatchDashboardRestrictionResponse",
 *     required={"id", "owner_id", "visibility", "writing_restriction", "created_at", "updated_at"}
 *  )
 */
class PatchDashboardRestrictionResponse extends UseTimestampModel
{
    /**
     * @OA\Property(type="string", format="uuid")
     */
    public $id;

    /**
     * @OA\Property(type="string", format="uuid")
     */
    public $owner_id;

    /**
     * @OA\Property(ref="#/components/schemas/Restriction")
     */
    public $visibility;

    /**
     * @OA\Property(ref="#/components/schemas/Restriction")
     */
    public $writing_restriction;
}