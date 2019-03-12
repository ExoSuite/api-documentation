<?php
/**
 * Created by PhpStorm.
 * User: loiclopez
 * Date: 2019-03-12
 * Time: 01:10
 */

/**
 * @OA\Schema(
 *     schema="PaginationScheme"
 *  )
 */
abstract class PaginationScheme
{
    /**
     * @var string
     * @OA\Property(example="http://api.exosuite.local/$RESSOURCE_URI?page=1")
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
     * @OA\Property(example="http://api.exosuite.local/$RESSOURCE_URI?page=2")
     */
    public $last_page_url;

    /**
     * @var string
     * @OA\Property(example="http://api.exosuite.local/$RESSOURCE_URI?page=2")
     */
    public $next_page_url;

    /**
     * @var string
     * @OA\Property(example="http://api.exosuite.local/$RESSOURCE_URI")
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
