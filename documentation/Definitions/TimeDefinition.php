<?php

/**
 * @OA\Post(
 *      path="/user/me/run/{run]/checkpoint/{checkpoint}/time/",
 *      operationId="createTime",
 *      security={{"passport": {}}},
 *      tags={"Time"},
 *     @OA\Parameter(
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
 *             @OA\Schema(ref="#/components/schemas/CreateTime")
 *         )
 *     ),
 *      summary="Create a new time",
 *      description="Create a new time, and returns the information about the created time.",
 *      @OA\Response(
 *          response=201,
 *          description="Successful operation",
 *          @OA\JsonContent(ref="#/components/schemas/CreateTimeResponse")
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
 *      path="/user/me/run/{run}/checkpoint/{checkpoint}/time/{time}/",
 *      operationId="patchTime",
 *      security={{"passport": {}}},
 *      tags={"Time"},
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
 *     @OA\Parameter(
 *          name="time",
 *          description="Time id",
 *          required=true,
 *          in="path",
 *          @OA\Schema(
 *              type="string"
 *          )),
 *      @OA\RequestBody(
 *         required=true,
 *         @OA\MediaType(
 *             mediaType="application/json",
 *             @OA\Schema(ref="#/components/schemas/PatchTime")
 *         ),
 *     ),
 *      summary="Modify a time",
 *      description="Modify a time, and returns the modified information about the time.",
 *      @OA\Response(
 *          response=200,
 *          description="Successful operation",
 *          @OA\JsonContent(ref="#/components/schemas/PatchTimeResponse")
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
 *      path="/user/me/run/{run}/checkpoint/{checkpoint}/time/{time}/",
 *      operationId="deleteTime",
 *      security={{"passport": {}}},
 *      tags={"Time"},
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
 *     @OA\Parameter(
 *          name="time",
 *          description="Time id",
 *          required=true,
 *          in="path",
 *          @OA\Schema(
 *              type="string"
 *          )
 *     ),
 *      summary="Delete a time",
 *      description="Delete a time.",
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
 *      path="/user/me/run/{run}/checkpoint/{checkpoint}/time/{time}/",
 *      operationId="getMyTimeByID",
 *      security={{"passport": {}}},
 *      tags={"Time"},
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
 *      @OA\Parameter(
 *          name="time",
 *          description="Time id",
 *          required=true,
 *          in="path",
 *          @OA\Schema(
 *              type="string"
 *          )
 *     ),
 *      summary="Get my time information",
 *      description="Get information about a time of your own.",
 *      @OA\Response(
 *          response=200,
 *          description="Successful operation",
 *          @OA\JsonContent(ref="#/components/schemas/GetTimeByIDResponse")
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
 *      path="/user/{user}/run/{run}/checkpoint/{checkpoint}/time/{time}/",
 *      operationId="getSomeoneTimeByID",
 *      security={{"passport": {}}},
 *      tags={"Time"},
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
 *     @OA\Parameter(
 *          name="time",
 *          description="Time id",
 *          required=true,
 *          in="path",
 *          @OA\Schema(
 *              type="string"
 *          )
 *     ),
 *      summary="Get someone's time information",
 *      description="Get information about a time of someone else.",
 *      @OA\Response(
 *          response=200,
 *          description="Successful operation",
 *          @OA\JsonContent(ref="#/components/schemas/GetTimeByIDResponse")
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
 *      path="/user/me/run/{run}/checkpoint/{checkpoint}/time/",
 *      operationId="getMyTimes",
 *      security={{"passport": {}}},
 *      tags={"Time"},
 *     @OA\Parameter(
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
 *      summary="Get all the times belonging to a checkpoint of your own",
 *      description="Get information about your checkpoint's times . Paginates results, with TimeController::GET_PER_PAGE times per page.",
 *      @OA\Response(
 *          response=200,
 *          description="Successful operation",
 *          @OA\JsonContent(ref="#/components/schemas/GetTimesResponse")
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
 *      path="/user/{user}/run/{run}/checkpoint/{checkpoint}/time/",
 *      operationId="getSomeoneTimes",
 *      security={{"passport": {}}},
 *      tags={"Time"},
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
 *      summary="Get someone's checkpoint's times",
 *      description="Get information about the times of a checkpoint belonging to someone else. Paginates results, with TimeController::GET_PER_PAGE times per page.",
 *      @OA\Response(
 *          response=200,
 *          description="Successful operation",
 *          @OA\JsonContent(ref="#/components/schemas/GetTimesResponse")
 *       ),
 *       @OA\Response(
 *          response=422,
 *          description="The given parameters were faulty",
 *          @OA\JsonContent(ref="#/components/schemas/ErrorResponse")
 *       )
 *     )
 **/