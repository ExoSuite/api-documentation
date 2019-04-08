<?php

/**
 * @OA\Post(
 *      path="/user/me/run/{run]/checkpoint/",
 *      operationId="createCheckPoint",
 *      tags={"Checkpoint"},
 *     @OA\Parameter(
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
 *             @OA\Schema(ref="#/components/schemas/CreateCheckpoint")
 *         )
 *     ),
 *      summary="Create a new checkpoint",
 *      description="Create a new checkpoint, and returns the information about the created checkpoint. Field 'location' must be an array of geometric arrays (which first value represents longitude, and second value represents latitude) which must be valid polygons.",
 *      @OA\Response(
 *          response=201,
 *          description="Successful operation",
 *          @OA\JsonContent(ref="#/components/schemas/CreateCheckpointResponse")
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
 *      path="/user/me/run/{run}/checkpoint/{checkpoint}/",
 *      operationId="patchCheckpoint",
 *      tags={"Checkpoint"},
 *      @OA\Parameter(
 *          name="run",
 *          description="Run id",
 *          required=true,
 *          in="path",
 *          @OA\Schema(
 *              type="string"
 *          )),
 *     @OA\Parameter(
 *          name="checkpoint",
 *          description="Checkpoint id",
 *          required=true,
 *          in="path",
 *          @OA\Schema(
 *              type="string"
 *          )),
 *      @OA\RequestBody(
 *         required=true,
 *         @OA\MediaType(
 *             mediaType="application/json",
 *             @OA\Schema(ref="#/components/schemas/PatchCheckpoint")
 *         ),
 *     ),
 *      summary="Modify a checkpoint",
 *      description="Modify a checkpoint, and returns the modified information about the checkpoint.",
 *      @OA\Response(
 *          response=200,
 *          description="Successful operation",
 *          @OA\JsonContent(ref="#/components/schemas/PatchCheckpointResponse")
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
 *      path="/user/me/run/{run}/checkpoint/{checkpoint}/",
 *      operationId="deleteCheckpoint",
 *      tags={"Checkpoint"},
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
 *          name="checkpoint",
 *          description="Checkpoint id",
 *          required=true,
 *          in="path",
 *          @OA\Schema(
 *              type="string"
 *          )
 *     ),
 *      summary="Delete a checkpoint",
 *      description="Delete a checkpoint.",
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
 *      path="/user/me/run/{run}/checkpoint/{checkpoint}/",
 *      operationId="getMyCheckpointByID",
 *      tags={"Checkpoint"},
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
 *          name="checkpoint",
 *          description="Checkpoint id",
 *          required=true,
 *          in="path",
 *          @OA\Schema(
 *              type="string"
 *          )
 *     ),
 *      summary="Get my checkpoint information",
 *      description="Get information about a checkpoint of your own.",
 *      @OA\Response(
 *          response=200,
 *          description="Successful operation",
 *          @OA\JsonContent(ref="#/components/schemas/GetCheckpointByIDResponse")
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
 *      path="/user/{user}/run/{run}/checkpoint/{checkpoint}/",
 *      operationId="getSomeoneCheckpointByID",
 *      tags={"Checkpoint"},
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
 *          name="checkpoint",
 *          description="Checkpoint id",
 *          required=true,
 *          in="path",
 *          @OA\Schema(
 *              type="string"
 *          )
 *     ),
 *      summary="Get someone's checkpoint information",
 *      description="Get information about a checkpoint of someone else.",
 *      @OA\Response(
 *          response=200,
 *          description="Successful operation",
 *          @OA\JsonContent(ref="#/components/schemas/GetCheckpointByIDResponse")
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
 *      path="/user/me/run/{run}/checkpoint/",
 *      operationId="getMyCheckpoints",
 *      tags={"Checkpoint"},
 *     @OA\Parameter(
 *          name="run",
 *          description="Run id",
 *          required=true,
 *          in="path",
 *          @OA\Schema(
 *              type="string"
 *          )
 *     ),
 *      summary="Get all the checkpoints belonging to a run of your own",
 *      description="Get information about your run's checkpoints (including their times). Paginates results, with CheckpointController::GET_PER_PAGE checkpoints per page.",
 *      @OA\Response(
 *          response=200,
 *          description="Successful operation",
 *          @OA\JsonContent(ref="#/components/schemas/GetCheckpointsResponse")
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
 *      path="/user/{user}/run/{run}/checkpoint/",
 *      operationId="getSomeoneCheckpoints",
 *      tags={"Checkpoint"},
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
 *      summary="Get someone's run's checkpoints",
 *      description="Get information (including their times) about the checkpoints of a run belonging to someone else. Paginates results, with CheckpointController::GET_PER_PAGE checkpoints per page.",
 *      @OA\Response(
 *          response=200,
 *          description="Successful operation",
 *          @OA\JsonContent(ref="#/components/schemas/GetCheckpointsResponse")
 *       ),
 *       @OA\Response(
 *          response=422,
 *          description="The given parameters were faulty",
 *          @OA\JsonContent(ref="#/components/schemas/ErrorResponse")
 *       )
 *     )
 **/