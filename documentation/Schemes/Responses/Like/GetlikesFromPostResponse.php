<?php
/**
 * Created by PhpStorm.
 * User: dupil_l
 * Date: 19-03-04
 * Time: 16:43
 */


/**
 * @OA\Schema(
 *     schema="GetlikesFromPostResponse",
 *     required={
 *       "data"
 *     }
 *  )
 */
class GetlikesFromPostResponse extends PaginationScheme
{
    /**
     * @var array
     * @OA\Property(type="array", @OA\Items(ref="#/components/schemas/LikeModel"))
     */
    public $data;
}