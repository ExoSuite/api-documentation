<?php
/**
 * Created by PhpStorm.
 * User: stan
 * Date: 23/01/19
 * Time: 18:47
 */

/**
 * @OA\Schema(
 *     schema="GetMessageResponse",
 *     required={"messages_array"}
 *  )
 */
class GetMessageResponse
{
    /**
     * @var array
     * @OA\Property(@OA\Items(type="message"),
     *             example={{"contents => Toto",
     *                      "user_id => 67eeab70-19f4-11e9-b4d2-476c47235c92",
     *                      "group_id => 67eeca70-19f4-11e9-b882-476c47252c92",
     *                      "id => 67eeca70-19f4-1ae9-b822-469c47252ca7"},
     *                      {"contents => Tata",
     *                      "user_id => 67eeab70-19f4-11e9-b4d2-476c47235c92",
     *                      "group_id => 67eeca70-19f4-11e9-b882-476c47252c92",
     *                      "id => 67eeca70-19f4-1ae9-b822-469c297a2ca7"}})
     */
    public $messages_array;
}