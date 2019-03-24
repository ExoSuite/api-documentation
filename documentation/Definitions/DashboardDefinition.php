<?php
/**
 * Created by PhpStorm.
 * User: dupil_l
 * Date: 19-01-26
 * Time: 15:19
 */

/**
 * @OA\Patch(
 *      path="user/{user}/dashboard/restriction",
 *      operationId="patchDashboardRestriction",
 *      tags={"Dashboard"},
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
 *             @OA\Schema(ref="#/components/schemas/PatchDashboardRestriction")
 *          )
 *     ),
 *       summary="Change Dashboard restriction",
 *       description="Allow the requirer to change his dashboard's restriction level.",
 *       @OA\Response(
 *          response=200,
 *          description="Successful operation",
 *          @OA\JsonContent(ref="#/components/schemas/PatchDashboardRestrictionResponse")
 *     ),
 *      @OA\Response(
 *          response=422,
 *          description="The given parameters were faulty",
 *          @OA\JsonContent(ref="#/components/schemas/ErrorResponse")
 *       )
 *     )
 **/

/**
 * @OA\Get(
 *      path="user/{user}/dashboard/restriction/",
 *      operationId="getRestriction",
 *      tags={"Dashboard"},
 *      @OA\Parameter(
 *          name="user",
 *          description="User id",
 *          required=true,
 *          in="path",
 *          @OA\Schema(
 *              type="string"
 *          )),
 *      summary="Get dashboard restriction",
 *      description="Get requester's dashboard restriction.",
 *      @OA\Response(
 *          response=200,
 *          description="Successful operation",
 *          @OA\JsonContent(ref="#/components/schemas/GetDashboardRestrictionResponse")
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
 *      path="user/{user}/dashboard/",
 *      operationId="getDashboardId",
 *      tags={"Dashboard"},
 *      @OA\Parameter(
 *          name="user",
 *          description="User id",
 *          required=true,
 *          in="path",
 *          @OA\Schema(
 *              type="string"
 *          )
 *     ),
 *      summary="Get dashboard id",
 *      description="Get the provided user's dashboard id.",
 *      @OA\Response(
 *          response=200,
 *          description="Successful operation",
 *          @OA\JsonContent(ref="#/components/schemas/GetDashboardIdResponse")
 *       ),
 *       @OA\Response(
 *          response=422,
 *          description="The given parameters were faulty",
 *          @OA\JsonContent(ref="#/components/schemas/ErrorResponse")
 *       )
 *     )
 **/
