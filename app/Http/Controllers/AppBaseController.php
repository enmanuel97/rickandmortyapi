<?php

namespace App\Http\Controllers;
use Exception;

class AppBaseController extends Controller
{
    public function sendSuccess($message, $data = [])
    {
        return response()->json(array_merge([
            'success' => true,
            'message' => $message,
        ], $data));
    }

    public function sendError(Exception $e, $data = [])
    {
        return response()->json(array_merge([
            'success' => false,
            'message' => $e->getMessage(),
        ], $data), $e->getCode());
    }
}