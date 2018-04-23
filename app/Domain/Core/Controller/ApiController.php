<?php
/**
 * Created by PhpStorm.
 * User: Nico
 * Date: 4/20/2018
 * Time: 10:16 AM
 */

namespace App\Domain\Core\Controller;

use \Illuminate\Http\Response as Res;
use Illuminate\Http\Response;

class ApiController extends Controller
{
    protected $statusCode = Res::HTTP_OK;

    public function __construct()
    {

    }

    public function getStatusCode()
    {
        return $this->statusCode;
    }

    public function setStatusCode($statusCode)
    {
        $this->statusCode = $statusCode;

        return $this;
    }

    public function respondCreated($message, $data = null)
    {
        return $this->respond([
                                  'status' => 'success',
                                  'status_code' => Res::HTTP_OK,
                                  'message' => $message,
                                  'data' => $data
                              ]);
    }

    public function respondNotFound($message = 'Not Found!')
    {
        return $this->respond([
                                  'status' => 'error',
                                  'status_code' => Res::HTTP_NOT_FOUND,
                                  'message' => $message,
                              ]);
    }

    public function respondInternalError($message)
    {
        return $this->respond([
                                  'status' => 'error',
                                  'status_code' => Res::HTTP_INTERNAL_SERVER_ERROR,
                                  'message' => $message,
                              ]);
    }

    public function respondValidationError($message, $errors)
    {
        return $this->respond([
                                  'status' => 'error',
                                  'status_code' => Res::HTTP_UNPROCESSABLE_ENTITY,
                                  'message' => $message,
                                  'data' => $errors
                              ]);
    }

    public function respond($data, $headers = [])
    {
        return Response::json($data, $this->getStatusCode(), $headers);
    }

    public function respondWithError($message)
    {
        return $this->respond([
                                  'status' => 'error',
                                  'status_code' => Res::HTTP_UNAUTHORIZED,
                                  'message' => $message,
                              ]);
    }
}