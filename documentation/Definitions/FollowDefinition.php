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
 *      path="user/{user}/follows/followers/",
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
 *      description="Get followers from someone.",
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
 *      path="user/me/follows/followers/",
 *      operationId="getFollowers",
 *      tags={"Follow"},
 *      summary="Get my followers.",
 *      description="Get all followers from someone.",
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
 *      path="user/{user}/follows/followers/count/",
 *      operationId="getFollowersCount",
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
 *      summary="Get user's followers count.",
 *      description="Get the number of followers for a given user.",
 *      @OA\Response(
 *          response=200,
 *          description="Successful operation",
 *          @OA\JsonContent(ref="#/components/schemas/GetFollowersCountResponse")
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
 *      path="user/me/follows/followers/count/",
 *      operationId="getFollowersCount",
 *      tags={"Follow"},
 *      summary="Get my followers count.",
 *      description="Get the number of followers for a given user.",
 *      @OA\Response(
 *          response=200,
 *          description="Successful operation",
 *          @OA\JsonContent(ref="#/components/schemas/GetFollowersCountResponse")
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
 *      path="user/{user}/follows/following/",
 *      operationId="getFollows",
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
 *      summary="Get user's follows.",
 *      description="Get all the follows from a given user.",
 *      @OA\Response(
 *          response=200,
 *          description="Successful operation",
 *          @OA\JsonContent(ref="#/components/schemas/GetFollowsResponse")
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
 *      path="user/me/follows/following/",
 *      operationId="getFollows",
 *      tags={"Follow"},
 *      summary="Get my follows.",
 *      description="Get all the follows from a given user.",
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
 *      path="user/{user}/follows/following/count/",
 *      operationId="getFollowsCount",
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
 *      summary="Get user's follows count.",
 *      description="Get the number of follows for a given user.",
 *      @OA\Response(
 *          response=200,
 *          description="Successful operation",
 *          @OA\JsonContent(ref="#/components/schemas/GetFollowersCountResponse")
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
 *      path="user/me/follows/following/count/",
 *      operationId="getFollowsCount",
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
 *      summary="Get my follows count.",
 *      description="Get the number of follows for a given user.",
 *      @OA\Response(
 *          response=200,
 *          description="Successful operation",
 *          @OA\JsonContent(ref="#/components/schemas/GetFollowersCountResponse")
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
