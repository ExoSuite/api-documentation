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
     * @OA\Property(@OA\Items(ref="#/components/schemas/MessageModel"))
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
     * @OA\Property(type="integer", example=30)
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
