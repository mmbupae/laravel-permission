<?php
/**
 * @author<rendy> at 11/03/2019
 */

if (! function_exists('success_response')) {
    function success_response($message, $code = 200, $data = null)
    {
        return response()->json([
            'message' => $message,
            'data' => $data
        ], $code);
    }
}

if (! function_exists('error_response')) {
    function error_response($message, $code = 500, $errors = null)
    {
        return response()->json([
            'message' => $message,
            'errors' => $errors
        ], $code);
    }
}