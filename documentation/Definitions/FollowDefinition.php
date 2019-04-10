<?php
/**
 * Created by PhpStorm.
 * User: dupil_l
 * Date: 19-01-26
 * Time: 15:21
 */

/**
 * @OA\Post(
 *      path="user/{user}/follows/",
 *      operationId="createFollow",
 *      tags={"Follow"},
 *      @OA\Parameter(
 *          name="user",
 *          description="User id",
 *          required=true,
 *          in="path",
 *          @OA\Schema(
 *              type="string"
 *          )),
 *      summary="Create a follow.",
 *      description="Create a new realtion as follower (requiring user as follower and target as followed one).",
 *      @OA\Response(
 *          response=201,
 *          description="Successful operation",
 *          @OA\JsonContent(ref="#/components/schemas/CreateFollowResponse")
 *       ),
 *       @OA\Response(
 *          response=422,
 *          description="The given parameters were faulty",
 *          @OA\JsonContent(ref="#/components/schemas/ErrorResponse")
 *       )
 * )
 **/

/**
 * @OA\Get(
 *      path="user/{user}/follows/followers",
 *      operationId="getFollowers",
 *      tags={"Follow"},
 *      @OA\Parameter(
 *          name="user",
 *          description="User id",
 *          required=true,
 *          in="path",
 *          @OA\Schema(
 *              type="string"
 *          )
 *     ),
 *      summary="Get followers.",
 *      description="Get all followers from someone (can be the requiring user himself).",
 *      @OA\Response(
 *          response=200,
 *          description="Successful operation",
 *          @OA\JsonContent(ref="#/components/schemas/GetFollowersResponse")
 *       ),
 *      @OA\Response(
 *          response=204,
 *          description="Successful operation"
 *       ),
 *       @OA\Response(
 *          response=422,
 *          description="The given parameters were faulty",
 *          @OA\JsonContent(ref="#/components/schemas/ErrorResponse")
 *       )
 * )
 **/

/**
 * @OA\Get(
 *      path="user/{user}/follows/",
 *      operationId="checkIfIamFollowing",
 *      tags={"Follow"},
 *      @OA\Parameter(
 *          name="user",
 *          description="User id",
 *          required=true,
 *          in="path",
 *          @OA\Schema(
 *              type="string"
 *          )
 *     ),
 *      summary="Get if i am following.",
 *      description="Get a boolean which indicate if the requiring user is following the target.",
 *      @OA\Response(
 *          response=200,
 *          description="Successful operation",
 *          @OA\JsonContent(ref="#/components/schemas/GetAmIFollowingResponse")
 *       ),
 *       @OA\Response(
 *          response=422,
 *          description="The given parameters were faulty",
 *          @OA\JsonContent(ref="#/components/schemas/ErrorResponse")
 *       )
 *     )
 **/

/**
 * @OA\Delete(
 *      path="user/{user}/follows/",
 *      operationId="deleteFollow",
 *      tags={"Follow"},
 *      @OA\Parameter(
 *          name="user",
 *          description="User id",
 *          required=true,
 *          in="path",
 *          @OA\Schema(
 *              type="string"
 *          )
 *     ),
 *      summary="Delete a follow.",
 *      description="Delete the 'follow' relation existing between the requiring user and the target (requiring user as follower and target as followed one).",
 *      @OA\Response(
 *          response=204,
 *          description="Successful operation"
 *       ),
 *       @OA\Response(
 *          response=422,
 *          description="The given parameters were faulty",
 *          @OA\JsonContent(ref="#/components/schemas/ErrorResponse")
 *       )
 *     )
 **/
