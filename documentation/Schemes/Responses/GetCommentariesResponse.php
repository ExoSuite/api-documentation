<?php
/**
 * Created by PhpStorm.
 * User: dupil_l
 * Date: 19-03-01
 * Time: 20:18
 */

/**
 * @OA\Schema(
 *     schema="GetCommentariesResponse",
 *     required={"commentaries_array"}
 *  )
 */
class GetCommentariesResponse
{
    /**
     * @var array
     * @OA\Property(@OA\Items(type="commentary"),
     *             example={{"content => Ceci est un commentaire.",
     *                      "id => 67eeab70-19f4-11e9-b4d2-476c47235c92",
     *                      "post_id => 67eeca70-19f4-11e9-b882-476c47252c92",
     *                      "author_id => 67eeca70-19f4-1ae9-b822-469c47252ca7"},
     *                      {"content => Ceci est un second commentaire",
     *                      "id => 67eeab70-19f4-11e9-b4d2-476c47235c92",
     *                      "post_id => 67eeca70-19f4-11e9-b882-476c47252c92",
     *                      "author_id => 67eeca70-19f4-1ae9-b822-469c297a2ca7"}})
     */
    public $commentaries_array;

}