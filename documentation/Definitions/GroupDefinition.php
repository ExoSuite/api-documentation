<?php
/**
 * Created by PhpStorm.
 * User: stan
 * Date: 23/01/19
 * Time: 16:48
 */

/**
 * @OA\Post(
 *      path="/group",
 *      operationId="createGroup",
 *      tags={"Group"},
 *      @OA\RequestBody(
 *         required=true,
 *         @OA\MediaType(
 *             mediaType="application/json",
 *             @OA\Schema(ref="#/components/schemas/CreateGroup")
 *         )
 *     ),
 *      summary="Create a new group",
 *      description="Create a new group, and returns the information about the created group.",
 *      @OA\Response(
 *          response=201,
 *          description="Successful operation",
 *          @OA\JsonContent(ref="#/components/schemas/CreateGroupResponse")
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
 *      path="/group/{group}",
 *      operationId="patchGroup",
 *      tags={"Group"},
 *      @OA\RequestBody(
 *         required=true,
 *         @OA\MediaType(
 *             mediaType="application/json",
 *             @OA\Schema(ref="#/components/schemas/PatchGroup")
 *         )
 *     ),
 *      summary="Modify a group",
 *      description="Modify a group, and returns the modified information about the group.",
 *      @OA\Response(
 *          response=201,
 *          description="Successful operation",
 *          @OA\JsonContent(ref="#/components/schemas/TokenResponse")
 *       ),
 *       @OA\Response(
 *          response=422,
 *          description="The given parameters were faulty",
 *          @OA\JsonContent(ref="#/components/schemas/ErrorResponse")
 *       )
 *     )
 **/