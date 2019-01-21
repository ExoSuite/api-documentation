<?php
/**
 * Created by PhpStorm.
 * User: loiclopez
 * Date: 2019-01-20
 * Time: 20:51
 */

/**
 * @OA\Schema(
 *     schema="ErrorResponse",
 *     required={"message", "errors"},
 *  )
 */
class ErrorResponse
{

    /**
     * @var string
     * @OA\Property(example="The given data was invalid.")
     */
    public $message;

    /**
     * @var array
     * @OA\Property(
     *          @OA\Items(type="string"),
     *          example={
     *              "email": {"The email field is required."},
     *              "password": {"The password field is required."}
     *           }
     * )
     */
    public $errors;
}