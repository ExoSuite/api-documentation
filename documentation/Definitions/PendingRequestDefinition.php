<?php
/**
 * Created by PhpStorm.
 * User: dupil_l
 * Date: 19-01-26
 * Time: 15:21
 */

/**
 * @OA\Post(
 *      path="{user}/pending_requests/",
 *      operationId="createPendingRequest",
 *      tags={"PendingRequest"},
 *      @OA\Parameter(
 *          name="user",
 *          description="User id",
 *          required=true,
 *          in="path",
 *          @OA\Schema(
 *              type="string"
 *          )),
 *      @OA\RequestBody(
 *         required=true,
 *         @OA\MediaType(
 *             mediaType="application/json",
 *             @OA\Schema(ref="#/components/schemas/CreatePendingRequest")
 *         )
 *     ),
 *      summary="Create pending request.",
 *      description="Create a new pending request.",
 *      @OA\Response(
 *          response=201,
 *          description="Successful operation",
 *          @OA\JsonContent(ref="#/components/schemas/CreatePendingRequestResponse")
 *       ),
 *       @OA\Response(
 *          response=422,
 *          description="The given parameters were faulty",
 *          @OA\JsonContent(ref="#/components/schemas/ErrorResponse")
 *       )
 *      )
 **/

/**
 * @OA\Get(
 *      path="/me/pending_requests/",
 *      operationId="getMyPendings",
 *      tags={"PendingRequest"},
 *      summary="Get pending requests.",
 *      description="Get the pending requests from the requiring user.",
 *      @OA\Response(
 *          response=200,
 *          description="Successful operation",
 *          @OA\JsonContent(@OA\Items(ref="#/components/schemas/PendingRequestModel"))
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
 *      path="/me/pending_requests/{request}",
 *      operationId="deletePending",
 *      tags={"PendingRequest"},
 *      @OA\Parameter(
 *          name="request",
 *          description="Pending Request id",
 *          required=true,
 *          in="path",
 *          @OA\Schema(
 *              type="string"
 *          )),
 *      summary="Delete a pending request.",
 *      description="Delete the passed in parameter pending request (the requiring user must be the target of the request).",
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
