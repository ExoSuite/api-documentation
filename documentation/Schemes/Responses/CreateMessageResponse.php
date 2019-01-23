<?php
/**
 * Created by PhpStorm.
 * User: stan
 * Date: 23/01/19
 * Time: 18:29
 */

/**
 * @OA\Schema(
 *     schema="CreateMessageResponse",
 *     required={"contents", "user_id", "group_id", "id"}
 *  )
 */
class CreateMessageResponse
{
    /**
     * @var string
     * @OA\Property(example="This is a message")
     */
    public $contents;

    /**
     * @var string
     * @OA\Property(example="67eeab70-19f4-11e9-b4d2-476c47235c92")
     */
    public $user_id;

    /**
     * @var string
     * @OA\Property(example="67eeca70-19f4-11e9-b882-476c47252c92")
     */
    public $group_id;

    /**
     * @var string
     * @OA\Property(example="67eeca70-19f4-1ae9-b122-469c47252c92")
     */
    public $id;
}