<?php
/**
 * Created by PhpStorm.
 * User: stan
 * Date: 23/01/19
 * Time: 18:25
 */

/**
 * @OA\Post(
 *      path="/group/{group}/message/",
 *      operationId="createMessage",
 *      security={{"passport": {}}},
 *      tags={"Message"},
 *      @OA\Parameter(
 *          name="group",
 *          description="Group id",
 *          required=true,
 *          in="path",
 *          @OA\Schema(
 *              type="string"
 *          )),
 *     @OA\RequestBody(
 *         required=true,
 *         @OA\MediaType(
 *             mediaType="application/json",
 *             @OA\Schema(ref="#/components/schemas/CreateMessage")
 *         )
 *     ),
 *      summary="Create a message",
 *      description="Create a message.",
 *      @OA\Response(
 *          response=201,
 *          description="Successful operation",
 *          @OA\JsonContent(ref="#/components/schemas/CreateMessageResponse")
 *       ),
 *       @OA\Response(
 *          response=422,
 *          description="The given parameters were faulty",
 *          @OA\JsonContent(ref="#/components/schemas/ErrorResponse")
 *       )
 *     )
 **/

/**
 * @OA\Patch(
 *      path="/group/{group}/message/{message}/",
 *      operationId="patchMessage",
 *      security={{"passport": {}}},
 *      tags={"Message"},
 *      @OA\Parameter(
 *          name="group",
 *          description="Group id",
 *          required=true,
 *          in="path",
 *          @OA\Schema(
 *              type="string"
 *          )),
 *     @OA\Parameter(
 *          name="message",
 *          description="Message id",
 *          required=true,
 *          in="path",
 *          @OA\Schema(
 *              type="string"
 *          )),
 *     @OA\RequestBody(
 *         required=true,
 *         @OA\MediaType(
 *             mediaType="application/json",
 *             @OA\Schema(ref="#/components/schemas/PatchMessage")
 *         )
 *     ),
 *      summary="Modify message's contents",
 *      description="Modify message's contents.",
 *      @OA\Response(
 *          response=200,
 *          description="Successful operation",
 *          @OA\JsonContent(ref="#/components/schemas/PatchMessageResponse")
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
 *      path="/group/{group}/message/",
 *      operationId="getMessage",
 *      security={{"passport": {}}},
 *      tags={"Message"},
 *      @OA\Parameter(
 *          name="group",
 *          description="Group id",
 *          required=true,
 *          in="path",
 *          @OA\Schema(
 *              type="string"
 *          )
 *     ),
 *      summary="Get one page of group's messages",
 *      description="Returns one page of group's messages (Number of messages per page according to MessageController::GET_PER_PAGE)",
 *      @OA\Response(
 *          response=200,
 *          description="Successful operation",
 *          @OA\JsonContent(ref="#/components/schemas/GetMessageResponse")
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
 *      path="/group/{group}/message/{message}/",
 *      operationId="deleteMessage",
 *      security={{"passport": {}}},
 *      tags={"Message"},
 *      @OA\Parameter(
 *          name="group",
 *          description="Group id",
 *          required=true,
 *          in="path",
 *          @OA\Schema(
 *              type="string"
 *          )),
 *     @OA\Parameter(
 *          name="message",
 *          description="Message id",
 *          required=true,
 *          in="path",
 *          @OA\Schema(
 *              type="string"
 *          )
 *     ),
 *      summary="Delete a message",
 *      description="Delete a message that belongs to a group.",
 *       @OA\Response(
 *          response=200,
 *          description="Successful operation",
 *          @OA\JsonContent(ref="#/components/schemas/MessageModel")
 *       ),
 *       @OA\Response(
 *          response=422,
 *          description="The given parameters were faulty",
 *          @OA\JsonContent(ref="#/components/schemas/ErrorResponse")
 *       )
 *     )
 **/
