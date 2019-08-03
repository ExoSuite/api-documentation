<?php

/**
 * @OA\Post(
 *      path="/user/me/run/{run]/user_run/",
 *      operationId="createUserRun",
 *      security={{"passport": {}}},
 *      tags={"UserRun"},
 *     @OA\Parameter(
 *          name="run",
 *          description="Run id",
 *          required=true,
 *          in="path",
 *          @OA\Schema(
 *              type="string"
 *          )),
 *      summary="Create a new user run",
 *      description="Create a new user run, and returns the information about the created user run.",
 *      @OA\Response(
 *          response=201,
 *          description="Successful operation",
 *          @OA\JsonContent(ref="#/components/schemas/CreateUserRunResponse")
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
 *      path="/user/me/run/{run}/user_run/{user_run}/",
 *      operationId="patchUserRun",
 *      security={{"passport": {}}},
 *      tags={"UserRun"},
 *      @OA\Parameter(
 *          name="run",
 *          description="Run id",
 *          required=true,
 *          in="path",
 *          @OA\Schema(
 *              type="string"
 *          )),
 *     @OA\Parameter(
 *          name="user_run",
 *          description="User run id",
 *          required=true,
 *          in="path",
 *          @OA\Schema(
 *              type="string"
 *          )),
 *      summary="Modify a user run",
 *      description="Update the total ran time.",
 *      @OA\Response(
 *          response=200,
 *          description="Successful operation",
 *          @OA\JsonContent(ref="#/components/schemas/PatchUserRunResponse")
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
 *      path="/user/me/run/{run}/user_run/{user_run}/",
 *      operationId="deleteUserRun",
 *      security={{"passport": {}}},
 *      tags={"UserRun"},
 *      @OA\Parameter(
 *          name="run",
 *          description="Run id",
 *          required=true,
 *          in="path",
 *          @OA\Schema(
 *              type="string"
 *          )
 *     ),
 *     @OA\Parameter(
 *          name="user_run",
 *          description="User run id",
 *          required=true,
 *          in="path",
 *          @OA\Schema(
 *              type="string"
 *          )
 *     ),
 *      summary="Delete a user run",
 *      description="Delete a user run.",
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
 *      path="/user/me/run/{run}/user_run/{user_run}/",
 *      operationId="getMyUserRunByID",
 *      security={{"passport": {}}},
 *      tags={"UserRun"},
 *      @OA\Parameter(
 *          name="run",
 *          description="Run id",
 *          required=true,
 *          in="path",
 *          @OA\Schema(
 *              type="string"
 *          )
 *     ),
 *      @OA\Parameter(
 *          name="user_run",
 *          description="User run id",
 *          required=true,
 *          in="path",
 *          @OA\Schema(
 *              type="string"
 *          )
 *     ),
 *      summary="Get my user run information",
 *      description="Get information about a user run of your own.",
 *      @OA\Response(
 *          response=200,
 *          description="Successful operation",
 *          @OA\JsonContent(ref="#/components/schemas/GetUserRunByIDResponse")
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
 *      path="/user/{user}/run/{run}/user_run/{user_run}/",
 *      operationId="getSomeoneUserRunByID",
 *      security={{"passport": {}}},
 *      tags={"UserRun"},
 *     @OA\Parameter(
 *          name="user",
 *          description="User id",
 *          required=true,
 *          in="path",
 *          @OA\Schema(
 *              type="string"
 *          )
 *     ),
 *      @OA\Parameter(
 *          name="run",
 *          description="Run id",
 *          required=true,
 *          in="path",
 *          @OA\Schema(
 *              type="string"
 *          )
 *     ),
 *     @OA\Parameter(
 *          name="user_run",
 *          description="User run id",
 *          required=true,
 *          in="path",
 *          @OA\Schema(
 *              type="string"
 *          )
 *     ),
 *      summary="Get someone's user run information",
 *      description="Get information about a user run of someone else.",
 *      @OA\Response(
 *          response=200,
 *          description="Successful operation",
 *          @OA\JsonContent(ref="#/components/schemas/GetUserRunByIDResponse")
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
 *      path="/user/me/run/{run}/user_run/",
 *      operationId="getMyUserRuns",
 *      security={{"passport": {}}},
 *      tags={"UserRun"},
 *     @OA\Parameter(
 *          name="run",
 *          description="Run id",
 *          required=true,
 *          in="path",
 *          @OA\Schema(
 *              type="string"
 *          )
 *     ),
 *      summary="Get all your user runs belonging to a run of your own",
 *      description="Get information about your run's user runs . Paginates results, with UserRunController::GET_PER_PAGE times per page.",
 *      @OA\Response(
 *          response=200,
 *          description="Successful operation",
 *          @OA\JsonContent(ref="#/components/schemas/GetUserRunsResponse")
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
 *      path="/user/{user}/run/{run}/user_run/",
 *      operationId="getSomeoneUserRuns",
 *      security={{"passport": {}}},
 *      tags={"UserRun"},
 *     @OA\Parameter(
 *          name="user",
 *          description="User id",
 *          required=true,
 *          in="path",
 *          @OA\Schema(
 *              type="string"
 *          )
 *     ),
 *      @OA\Parameter(
 *          name="run",
 *          description="Run id",
 *          required=true,
 *          in="path",
 *          @OA\Schema(
 *              type="string"
 *          )
 *     ),
 *      summary="Get someone's user runs",
 *      description="Get information about the user runs of someone else. Paginates results, with UserRunsController::GET_PER_PAGE times per page.",
 *      @OA\Response(
 *          response=200,
 *          description="Successful operation",
 *          @OA\JsonContent(ref="#/components/schemas/GetUserRunsResponse")
 *       ),
 *       @OA\Response(
 *          response=422,
 *          description="The given parameters were faulty",
 *          @OA\JsonContent(ref="#/components/schemas/ErrorResponse")
 *       )
 *     )
 **/