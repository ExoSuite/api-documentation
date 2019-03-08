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
 *     required={"data"}
 *  )
 */
class GetMessageResponse
{
    /**
     * @var array
     * @OA\Property(@OA\Items(type="message"),
     *              example={"id => fc7ef8b0-414b-11e9-af5e-6fd5ac914d6a",
    "contents => 7TdbHw75o4",
    "group_id => fc7c17b0-414b-11e9-b643-b3b9900c651c",
    "user_id => fc7a22f0-414b-11e9-9895-b19065e9260e",
    "created_at => 2019-03-08 02:43:42",
    "updated_at => 2019-03-08 02:43:42"})
     */
    public $data;

    /**
     * @var string
     * @OA\Property(example="http://api.exosuite.local/group/fc7c17b0-414b-11e9-b643-b3b9900c651c/message?page=1")
     */
    public $first_page_url;

    /**
     * @var string
     * @OA\Property(example="1")
     */
    public $from;

    /**
     * @var string
     * @OA\Property(example="2")
     */
    public $last_page;

    /**
     * @var string
     * @OA\Property(example="http://api.exosuite.local/group/fc7c17b0-414b-11e9-b643-b3b9900c651c/message?page=2")
     */
    public $last_page_url;

    /**
     * @var string
     * @OA\Property(example="http://api.exosuite.local/group/fc7c17b0-414b-11e9-b643-b3b9900c651c/message?page=2")
     */
    public $next_page_url;

    /**
     * @var string
     * @OA\Property(example="http://api.exosuite.local/group/fc7c17b0-414b-11e9-b643-b3b9900c651c/message")
     */
    public $path;

    /**
     * @var string
     * @OA\Property(example="30")
     */
    public $per_page;

    /**
     * @var string
     * @OA\Property(example="null")
     */
    public $prev_page_url;

    /**
     * @var string
     * @OA\Property(example="30")
     */
    public $to;

    /**
     * @var string
     * @OA\Property(example="40")
     */
    public $total;
}