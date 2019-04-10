<?php
/**
 * Created by PhpStorm.
 * UserResponse: loiclopez
 * Date: 20/09/2018
 * Time: 15:11
 */

/**
 * @OA\Post(
 *      path="/user/me/profile",
 *      operationId="createRegister",
 *      tags={"UserProfile"},
 *      security={{"passport": {}}},
 *      @OA\RequestBody(
 *         required=false,
 *         @OA\MediaType(
 *             mediaType="application/json",
 *             @OA\Schema(ref="#/components/schemas/UserProfile")
 *         )
 *     ),
 *      summary="Create UserResponse Profile",
 *      description="Request Body is not mandatory but Bearer token is required",
 *      @OA\Response(
 *          response=201,
 *          description="successful operation",
 *       ),
 *       @OA\Response(
 *          response=422,
 *          description="The given parameters were faulty",
 *          @OA\JsonContent(ref="#/components/schemas/ErrorResponse")
 *       ),
 *       @OA\Response(
 *          response=401,
 *         description="Unauthorized",
 *       )
 *     )
 **/

/**
 * @OA\Patch(
 *      path="/user/me/profile",
 *      operationId="patchRegister",
 *      tags={"UserProfile"},
 *      security={{"passport": {"*"}}},
 *      @OA\RequestBody(
 *         required=false,
 *         @OA\MediaType(
 *             mediaType="application/json",
 *             @OA\Schema(ref="#/components/schemas/UserProfile")
 *         )
 *     ),
 *      summary="Update UserResponse Profile",
 *      description="Request Body is not mandatory but Bearer token is required",
 *      @OA\Response(
 *          response=204,
 *          description="successful operation",
 *       ),
 *       @OA\Response(
 *          response=422,
 *          description="The given parameters were faulty",
 *          @OA\JsonContent(ref="#/components/schemas/ErrorResponse")
 *       ),
 *      @OA\Response(
 *          response=401,
 *         description="Unauthorized",
 *       )
 *     )
 **/

/**
 * @OA\Get(
 *      path="/user/me/",
 *      operationId="getRegister",
 *      tags={"UserProfile"},
 *      security={{"passport": {}}},
 *      summary="Get UserResponse Profile",
 *      description="Bearer token is required",
 *      @OA\Response(
 *          response=200,
 *          description="successful operation",
 *          @OA\JsonContent(ref="#/components/schemas/UserResponse")
 *       ),
 *       @OA\Response(
 *          response=401,
 *          description="Unauthorized"
 *       )
 *     )
 **/

/**
 * @OA\Get(
 *      path="/user/{user}/profile/",
 *      operationId="getUserProfile",
 *      tags={"UserProfile"},
 *      security={{"passport": {}}},
 *      @OA\Parameter(
 *          name="user",
 *          description="User id",
 *          required=true,
 *          in="path",
 *          @OA\Schema(
 *              type="string"
 *          )),
 *      summary="Get user profile",
 *      description="Return the profile of the targeted user.",
 *      @OA\Response(
 *          response=200,
 *          description="successful operation",
 *          @OA\JsonContent(ref="#/components/schemas/UserResponse")
 *       ),
 *       @OA\Response(
 *          response=401,
 *          description="Unauthorized"
 *       )
 *     )
 **/

/**
 * @OA\Get(
 *      path="user/me/profile/restrictions",
 *      operationId="getMyProfileRestrictions",
 *      tags={"UserProfileRestrictions"},
 *      security={{"passport": {}}},
 *      summary="Get user's profile restrictions",
 *      description="Return the profile access rules of the user.",
 *      @OA\Response(
 *          response=200,
 *          description="successful operation",
 *          @OA\JsonContent(ref="#/components/schemas/ProfileRestrictions")
 *       ),
 *       @OA\Response(
 *          response=401,
 *          description="Unauthorized"
 *       )
 *     )
 **/

/**
 * @OA\Get(
 *      path="/user/{user}/profile/restrictions",
 *      operationId="getUserProfileRestrictions",
 *      tags={"UserProfileRestrictions"},
 *      security={{"passport": {}}},
 *      @OA\Parameter(
 *          name="user",
 *          description="User id",
 *          required=true,
 *          in="path",
 *          @OA\Schema(
 *              type="string"
 *          )),
 *      summary="Get someone's profile restrictions",
 *      description="Return the profile access rules of the targeted user.",
 *      @OA\Response(
 *          response=200,
 *          description="successful operation",
 *          @OA\JsonContent(ref="#/components/schemas/ProfileRestrictions")
 *       ),
 *       @OA\Response(
 *          response=401,
 *          description="Unauthorized"
 *       )
 *     )
 **/

/**
 * @OA\Patch(
 *      path="user/me/profile/restrictions",
 *      operationId="patchProfileRestrictions",
 *      tags={"UserProfileRestrictions"},
 *      security={{"passport": {}}},
 *      @OA\RequestBody(
 *         required=false,
 *         @OA\MediaType(
 *             mediaType="application/json",
 *             @OA\Schema(ref="#/components/schemas/UserProfileRestrictions")
 *         )
 *     ),
 *      summary="Update Profile Restrictions",
 *      description="Request Body is not mandatory but Bearer token is required",
 *      @OA\Response(
 *          response=204,
 *          description="successful operation",
 *       ),
 *       @OA\Response(
 *          response=422,
 *          description="The given parameters were faulty",
 *          @OA\JsonContent(ref="#/components/schemas/ErrorResponse")
 *       ),
 *      @OA\Response(
 *          response=401,
 *         description="Unauthorized",
 *       )
 *     )
 **/
