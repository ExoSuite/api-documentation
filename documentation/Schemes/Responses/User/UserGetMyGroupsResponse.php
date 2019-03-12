<?php
/**
 * Created by PhpStorm.
 * User: loiclopez
 * Date: 2019-03-12
 * Time: 01:19
 */

/**
 * @OA\Schema(
 *     schema="UserGetMyGroupsResponse",
 *     required={
 *       "data", "first_page_url", "from", "last_page",
 *       "next_page_url", "last_page_url", "path", "per_page", "prev_page_url", "to", "total"
 *     }
 *  )
 */
class UserGetMyGroupsResponse extends PaginationScheme
{
    /**
     * @var array
     * @OA\Property(@OA\Items(ref="#/components/schemas/GroupModel"))
     */
    public $data;
}
