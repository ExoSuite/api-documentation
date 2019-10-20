<?php

/**
 * @OA\Post(
 *      path="/user/me/run/{run]/record/",
 *      operationId="createRecord",
 *      security={{"passport": {}}},
 *      tags={"Record"},
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
 *             @OA\Schema(ref="#/components/schemas/CreateRecord")
 *         )
 *     ),
 *      summary="Create a new empty record",
 *      description="Create a new basic record based on an UserRun ID provided in body parameter. To call after the creation on a UserRun.",
 *      @OA\Response(
 *          response=201,
 *          description="Successful operation",
 *          @OA\JsonContent(ref="#/components/schemas/CreateRecordResponse")
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
 *      path="/user/me/run/{run}/record/{record}/",
 *      operationId="patchRecord",
 *      security={{"passport": {}}},
 *      tags={"Record"},
 *      @OA\Parameter(
 *          name="run",
 *          description="Run id",
 *          required=true,
 *          in="path",
 *          @OA\Schema(
 *              type="string"
 *          )),
 *     @OA\Parameter(
 *          name="record",
 *          description="Record id",
 *          required=true,
 *          in="path",
 *          @OA\Schema(
 *              type="string"
 *          )),
 *      @OA\RequestBody(
 *         required=true,
 *         @OA\MediaType(
 *             mediaType="application/json",
 *             @OA\Schema(ref="#/components/schemas/PatchRecord")
 *         ),
 *     ),
 *      summary="Update the record at the end of the run.",
 *      description="Update all record's fields. To call at the end of a run, just after an UserRun update.",
 *      @OA\Response(
 *          response=200,
 *          description="Successful operation",
 *          @OA\JsonContent(ref="#/components/schemas/PatchRecordResponse")
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
 *      path="/user/me/run/{run}/record/{record}/",
 *      operationId="deleteRecord",
 *      security={{"passport": {}}},
 *      tags={"Record"},
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
 *          name="record",
 *          description="Record id",
 *          required=true,
 *          in="path",
 *          @OA\Schema(
 *              type="string"
 *          )
 *     ),
 *      summary="Delete a record",
 *      description="Delete a record.",
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
 *      path="/user/me/run/{run}/record/",
 *      operationId="getMyRecords",
 *      security={{"passport": {}}},
 *      tags={"Record"},
 *      @OA\Parameter(
 *          name="run",
 *          description="Run id",
 *          required=true,
 *          in="path",
 *          @OA\Schema(
 *              type="string"
 *          )
 *     ),
 *      summary="Get your records informations",
 *      description="Get information about your best record's datas for a given Run.",
 *      @OA\Response(
 *          response=200,
 *          description="Successful operation",
 *          @OA\JsonContent(ref="#/components/schemas/GetRecordsResponse")
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
 *      path="/user/{user}/run/{run}/record/",
 *      operationId="getSomeoneRecords",
 *      security={{"passport": {}}},
 *      tags={"Record"},
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
 *      summary="Get someone's run's records",
 *      description="Get information about someone's run's records data.",
 *      @OA\Response(
 *          response=200,
 *          description="Successful operation",
 *          @OA\JsonContent(ref="#/components/schemas/GetRecordsResponse")
 *       ),
 *       @OA\Response(
 *          response=422,
 *          description="The given parameters were faulty",
 *          @OA\JsonContent(ref="#/components/schemas/ErrorResponse")
 *       )
 *     )
 **/