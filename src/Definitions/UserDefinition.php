<?php
/**
 * Created by PhpStorm.
 * UserResponse: loiclopez
 * Date: 20/09/2018
 * Time: 16:33
 */

/**
 * @OA\Get(
 *      path="/user/me",
 *      operationId="getUser",
 *      tags={"UserResponse"},
 *      security={{"passport": {}}},
 *      summary="Get UserResponse",
 *      description="Bearer token is required",
 *      @OA\Response(
 *          response=200,
 *          description="successful operation",
 *          @OA\JsonContent(ref="#/components/schemas/UserResponse")
 *       ),
 *       @OA\Response(
 *          response=401,
 *         description="Unauthorized",
 *       )
 *     )
 **/


/**
 * @OA\Get(
 *      path="/user/search",
 *      operationId="SearchUser",
 *      tags={"UserResponse"},
 *      security={{"passport": {}}},
 *      summary="Search a UserResponse",
 *      description="Bearer token is required",
 *      @OA\Parameter(
 *          name="text",
 *          required=true,
 *          in="query",
 *          description="The text to search a user",
 *          allowEmptyValue=false,
 *          @OA\Schema(
 *              type="string"
 *          )
 *     ),
 *
 *      @OA\Response(
 *          response=200,
 *          description="successful operation",
 *          @OA\JsonContent(
 *              type="array",
 *              @OA\Items(ref="#/components/schemas/UserResponse")
 *          )
 *       ),
 *       @OA\Response(
 *          response=401,
 *          description="Unauthorized",
 *       ),
 *       @OA\Response(
 *          response=422,
 *          description="The given parameters were faulty",
 *          @OA\JsonContent(ref="#/components/schemas/ErrorResponse")
 *       )
 *     )
 **/
