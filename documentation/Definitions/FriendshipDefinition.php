<?php
/**
 * Created by PhpStorm.
 * User: dupil_l
 * Date: 19-01-26
 * Time: 15:21
 */

/**
 * @OA\Post(
 *      path="user/{user}/friendship/",
 *      operationId="sendFriendshipRequest",
 *      tags={"Friendship"},
 *      @OA\Parameter(
 *          name="user",
 *          description="User id",
 *          required=true,
 *          in="path",
 *          @OA\Schema(
 *              type="string"
 *          )),
 *      summary="Create a friendship request.",
 *      description="Create a new friendship request sent to the target.",
 *      @OA\Response(
 *          response=201,
 *          description="Successful operation",
 *          @OA\JsonContent(ref="#/components/schemas/CreateFriendshipRequestResponse")
 *       ),
 *       @OA\Response(
 *          response=422,
 *          description="The given parameters were faulty",
 *          @OA\JsonContent(ref="#/components/schemas/ErrorResponse")
 *       )
 *     )
 **/

/**
 * @OA\Post(
 *      path="/me/friendship/{request}/accept",
 *      operationId="acceptRequest",
 *      tags={"Friendship"},
 *      @OA\Parameter(
 *          name="request",
 *          description="Pending Request id",
 *          required=true,
 *          in="path",
 *          @OA\Schema(
 *              type="string"
 *          )),
 *      summary="Accept friendship request.",
 *      description="Accept a new friendship and create a new relation 'friendship'.",
 *      @OA\Response(
 *          response=201,
 *          description="Successful operation",
 *          @OA\JsonContent(ref="#/components/schemas/CreateFriendshipResponse")
 *       ),
 *       @OA\Response(
 *          response=422,
 *          description="The given parameters were faulty",
 *          @OA\JsonContent(ref="#/components/schemas/ErrorResponse")
 *       )
 *     )
 **/

/**
 * @OA\Post(
 *      path="/me/friendship/{request}/decline",
 *      operationId="declineRequest",
 *      tags={"Friendship"},
 *      @OA\Parameter(
 *          name="request",
 *          description="Pending Request id",
 *          required=true,
 *          in="path",
 *          @OA\Schema(
 *              type="string"
 *          )),
 *      summary="Decline friendship request.",
 *      description="Decline a new friendship request.'.",
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

/**
 * @OA\Get(
 *      path="user/{user}/friendship/",
 *      operationId="getFriendships",
 *      tags={"Friendship"},
 *      @OA\Parameter(
 *          name="user",
 *          description="User id",
 *          required=true,
 *          in="path",
 *          @OA\Schema(
 *              type="string"
 *          )
 *     ),
 *      summary="Get friends from someone.",
 *      description="Get the friendlist of the targeted user.",
 *      @OA\Response(
 *          response=200,
 *          description="Successful operation",
 *          @OA\JsonContent(ref="#/components/schemas/GetFriendshipsResponse")
 *       ),
 *       @OA\Response(
 *          response=422,
 *          description="The given parameters were faulty",
 *          @OA\JsonContent(ref="#/components/schemas/ErrorResponse")
 *       )
 *     )
 **/

/**
 * @OA\Get(
 *      path="/me/friendship/",
 *      operationId="getMyFriendships",
 *      tags={"Friendship"},
 *      summary="Get my friends.",
 *      description="Get the friendlist of the current user.",
 *      @OA\Response(
 *          response=200,
 *          description="Successful operation",
 *          @OA\JsonContent(ref="#/components/schemas/GetFriendshipsResponse")
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
 *      path="user/{user}/friendship/",
 *      operationId="deleteFriendships",
 *      tags={"Friendship"},
 *      @OA\Parameter(
 *          name="user",
 *          description="User id",
 *          required=true,
 *          in="path",
 *          @OA\Schema(
 *              type="string"
 *          )
 *     ),
 *      summary="Delete a friendship",
 *      description="Delete a friendship relation between the requiring user and the target.",
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

