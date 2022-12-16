<?php

namespace App\Http\Controllers;

use Exception;
use Illuminate\Database\QueryException;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Support\Js;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    protected function successResponse($message = '', $data = [], $status = 200)
    {
        return response()->json(array_merge([
            'status' => 'Success',
            'message' => $message
        ], $data), $status);
    }

    protected function exceptionResponse(Exception $e)
    {
        if (env('APP_DEBUG') == true) {
            if (get_class($e) == QueryException::class and ($e->getCode() == '23000' || $e->getCode() == '23503')) {
                return response()->json([
                    'message' => 'Data tidak dapat dihapus karena masih digunakan oleh data lain',
                ], 500);
            } else if (get_class($e) == QueryException::class and $e->getCode() == '23505') {
                return response()->json([
                    'message' => 'Terdapat duplikasi data'
                ], 500);
            } else {
                return response()->json([
                    'status' => 'Error',
                    'message' => $e->getMessage()
                ], 500);
            }
        } else {
            return response()->json([
                'status' => 'Error',
                'message' => 'Server Error'
            ], 500);
        }
    }

    protected function errorResponse($code = 400, $message = 'No error messages', $data = [])
    {
        return response()->json(array_merge([
            'status' => 'Fail',
            'message' => $message
        ], $data), $code);
    }
}
