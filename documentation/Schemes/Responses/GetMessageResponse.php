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
     *              example={"current_page => 1",
    "data => array:30 {",
    "0 => array:6 {",
    "id => fc7ef8b0-414b-11e9-af5e-6fd5ac914d6a",
    "contents => 7TdbHw75o4",
    "group_id => fc7c17b0-414b-11e9-b643-b3b9900c651c",
    "user_id => fc7a22f0-414b-11e9-9895-b19065e9260e",
    "created_at => 2019-03-08 02:43:42",
    "updated_at => 2019-03-08 02:43:42",
    "]",
    "...other messages...",
    "]",
    "first_page_url => http://api.exosuite.local/group/fc7c17b0-414b-11e9-b643-b3b9900c651c/message?page=1",
    "from => 1",
    "last_page => 2",
    "last_page_url => http://api.exosuite.local/group/fc7c17b0-414b-11e9-b643-b3b9900c651c/message?page=2",
    "next_page_url => http://api.exosuite.local/group/fc7c17b0-414b-11e9-b643-b3b9900c651c/message?page=2",
    "path => http://api.exosuite.local/group/fc7c17b0-414b-11e9-b643-b3b9900c651c/message",
    "per_page => 30",
    "prev_page_url => null",
    "to => 30",
    "total => 40"})
     */
    public $messages_array;
}