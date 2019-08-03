<?php
/**
 * Created by PhpStorm.
 * User: stan
 * Date: 23/01/19
 * Time: 19:08
 */

/**
 * @OA\Patch(
 *      path="/notification/{notification?}/",
 *      operationId="patchNotification",
 *      security={{"passport": {}}},
 *      tags={"Notification"},
 *      @OA\Parameter(
 *          name="notification",
 *          description="Notification id",
 *          required=false,
 *          in="path",
 *          @OA\Schema(
 *              type="string"
 *          )
 *     ),
 *      summary="Mark as read a notification",
 *      description="This route will mark as read the specified notification, or mark as read all user's notifications if no notification ID is specified as parameter.",
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
 *      path="/notification/",
 *      operationId="getNotification",
 *      security={{"passport": {}}},
 *      tags={"Notification"},
 *      summary="Get user notifications",
 *      description="Get all the notifications of the currently logged user.",
 *      @OA\Response(
 *          response=200,
 *          description="Successful operation",
 *          @OA\JsonContent(type="array", @OA\Items(ref="#/components/schemas/NotificationModel"))
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
 *      path="/notification/{notification?}/",
 *      operationId="deleteNotification",
 *      security={{"passport": {}}},
 *      tags={"Notification"},
 *      @OA\Parameter(
 *          name="notification",
 *          description="Notification id",
 *          required=false,
 *          in="path",
 *          @OA\Schema(
 *              type="string"
 *          )
 *     ),
 *      summary="Delete a notification",
 *      description="This route will delete the specified notification, or delete all user's notifications if no notification ID is specified as parameter.",
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
