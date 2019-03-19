<?php
/**
 * Created by PhpStorm.
 * User: dupil_l
 * Date: 19-03-04
 * Time: 16:43
 */

/**
 * @OA\Schema(
 *     schema="GetLikesFromCommentaryResponse",
 *     required={
 *       "data"
 *     }
 *  )
 */

class GetLikesFromCommentaryResponse
{
    /**
     * @var array
     * @OA\Property(type="array", @OA\Items(ref="#/components/schemas/LikeModel"))
     */
    public $data;
}