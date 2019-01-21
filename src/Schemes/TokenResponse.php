<?php
/**
 * Created by PhpStorm.
 * User: loiclopez
 * Date: 2019-01-20
 * Time: 20:54
 */

/**
 * @OA\Schema(
 *     schema="TokenResponse",
 *     required={"token_type", "expires_in", "access_token", "refresh_token"},
 *  )
 */
class TokenResponse
{
    /**
     * @var string
     * @OA\Property()
     */
    public $token_type;

    /**
     * @var integer
     * @OA\Property()
     */
    public $expires_in;

    /**
     * @var string
     * @OA\Property()
     */
    public $access_token;

    /**
     * @var string
     * @OA\Property()
     */
    public $refresh_token;
}

