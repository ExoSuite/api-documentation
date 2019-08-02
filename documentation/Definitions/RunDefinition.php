<?php

/**
 * @OA\Post(
 *      path="/user/me/run/",
 *      operationId="createRun",
 *      tags={"Run"},
 *      @OA\RequestBody(
 *         required=true,
 *         @OA\MediaType(
 *             mediaType="application/json",
 *             @OA\Schema(ref="#/components/schemas/CreateRun")
 *         )
 *     ),
 *      summary="Create a new run",
 *      description="Create a new run, and returns the information about the created run.",
 *      @OA\Response(
 *          response=201,
 *          description="Successful operation",
 *          @OA\JsonContent(ref="#/components/schemas/CreateRunResponse")
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
 *      path="/user/me/run/{run}/",
 *      operationId="patchRun",
 *      tags={"Run"},
 *      @OA\Parameter(
 *          name="run",
 *          description="Run id",
 *          required=true,
 *          in="path",
 *          @OA\Schema(
 *              type="string"
 *          )),
 *      @OA\RequestBody(
 *         required=true,
 *         @OA\MediaType(
 *             mediaType="application/json",
 *             @OA\Schema(ref="#/components/schemas/PatchRun")
 *         ),
 *     ),
 *      summary="Modify a run",
 *      description="Modify a run, and returns the modified information about the run.",
 *      @OA\Response(
 *          response=200,
 *          description="Successful operation",
 *          @OA\JsonContent(ref="#/components/schemas/PatchRunResponse")
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
 *      path="/user/me/run/{run}/",
 *      operationId="deleteRun",
 *      tags={"Run"},
 *      @OA\Parameter(
 *          name="run",
 *          description="Run id",
 *          required=true,
 *          in="path",
 *          @OA\Schema(
 *              type="string"
 *          )
 *     ),
 *      summary="Delete a run",
 *      description="Delete a run.",
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
 *      path="/user/me/run/{run}/",
 *      operationId="getMyRunByID",
 *      tags={"Run"},
 *      @OA\Parameter(
 *          name="run",
 *          description="Run id",
 *          required=true,
 *          in="path",
 *          @OA\Schema(
 *              type="string"
 *          )
 *     ),
 *      summary="Get my run information",
 *      description="Get information about a run of your own.",
 *      @OA\Response(
 *          response=200,
 *          description="Successful operation",
 *          @OA\JsonContent(ref="#/components/schemas/GetRunByIDResponse")
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
 *      path="/user/{user}/run/{run}/",
 *      operationId="getSomeoneRunByID",
 *      tags={"Run"},
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
 *      summary="Get someone's run information",
 *      description="Get information about a run of someone else.",
 *      @OA\Response(
 *          response=200,
 *          description="Successful operation",
 *          @OA\JsonContent(ref="#/components/schemas/GetRunByIDResponse")
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
 *      path="/user/me/run/",
 *      operationId="getMyRuns",
 *      tags={"Run"},
 *      summary="Get all my runs",
 *      description="Get information about your runs (including their checkpoints and their associated times). Paginates results, with RunController::GET_PER_PAGE runs per page.",
 *      @OA\Response(
 *          response=200,
 *          description="Successful operation",
 *          @OA\JsonContent(ref="#/components/schemas/GetRunsResponse")
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
 *      path="/user/{user}/run/",
 *      operationId="getSomeoneRuns",
 *      tags={"Run"},
 *     @OA\Parameter(
 *          name="user",
 *          description="User id",
 *          required=true,
 *          in="path",
 *          @OA\Schema(
 *              type="string"
 *          )
 *     ),
 *      summary="Get someone's runs",
 *      description="Get information (including their checkpoints and their associated times) about the runs of someone else. Paginates results, with RunController::GET_PER_PAGE runs per page.",
 *      @OA\Response(
 *          response=200,
 *          description="Successful operation",
 *          @OA\JsonContent(ref="#/components/schemas/GetRunsResponse")
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
 *      path="/user/{user}/run/search",
 *      operationId="searchUserRun",
 *      security={{"passport": {}}},
 *      tags={"Run"},
 *      @OA\Parameter(
 *          name="text",
 *          required=true,
 *          in="query",
 *          description="The text to search a run",
 *          allowEmptyValue=false,
 *          @OA\Schema(
 *              type="string"
 *          )
 *     ),
 *      summary="Search someone's runs",
 *      description="Search and return simple array of runs.",
 *      @OA\Response(
 *          response=200,
 *          description="Successful operation",
 *          @OA\JsonContent(ref="#/components/schemas/SearchRunsResponse")
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
 *      path="/user/me/run/search",
 *      operationId="searchMyUserRun",
 *      security={{"passport": {}}},
 *      tags={"Run", "My"},
 *      @OA\Parameter(
 *          name="text",
 *          required=true,
 *          in="query",
 *          description="The text to search a run",
 *          allowEmptyValue=false,
 *          @OA\Schema(
 *              type="string"
 *          )
 *     ),
 *      summary="Search my runs",
 *      description="Search and return simple array of runs.",
 *      @OA\Response(
 *          response=200,
 *          description="Successful operation",
 *          @OA\JsonContent(ref="#/components/schemas/SearchRunsResponse")
 *       ),
 *       @OA\Response(
 *          response=422,
 *          description="The given parameters were faulty",
 *          @OA\JsonContent(ref="#/components/schemas/ErrorResponse")
 *       )
 *     )
 **/
