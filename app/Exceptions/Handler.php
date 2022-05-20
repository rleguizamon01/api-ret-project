<?php

namespace App\Exceptions;

use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Foundation\Exceptions\Handler as ExceptionHandler;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;
use Illuminate\Validation\UnauthorizedException;
use Illuminate\Validation\ValidationException;
use Throwable;

class Handler extends ExceptionHandler
{
    /**
     * A list of the exception types that are not reported.
     *
     * @var array<int, class-string<Throwable>>
     */
    protected $dontReport = [
        //
    ];

    /**
     * A list of the inputs that are never flashed for validation exceptions.
     *
     * @var array<int, string>
     */
    protected $dontFlash = [
        'current_password',
        'password',
        'password_confirmation',
    ];

    /**
     * Register the exception handling callbacks for the application.
     *
     * @return void
     */
    public function register()
    {
        $this->reportable(function (Throwable $e) {
            //
        });
    }

    public function render($request, Throwable $exception)
    {
        // avoid showing authentication error
        if($exception->getCode() != 6) {
            Log::error('Error [' . $exception->getCode() . '] ocurrido en ' . $exception->getFile() . " (" . $exception->getLine() . ") por usuario " . (Auth::id() ?? '[no logeado]') . ' en endpoint ' . ($request->fullUrl() ?? '[no definido]') . ': ' . $exception->getMessage());
            Log::error($exception->getTraceAsString());

            if($request->has('password'))
                unset($request['password']);

            Log::info($request);
        }

        if($exception instanceof ValidationException) {
            Log::error('validation errors: ', $exception->errors());
        }

        if ($exception instanceof ModelNotFoundException) {
            return response()->json([
                'errors' => [
                    'error' => 'No se han encontrado registros.'
                ],
                'model' => $exception->getModel()
            ], 404);
        }

        if ($exception instanceof \Error) {
            return response()->json([
                'errors' => [
                    'error' => 'Ha ocurrido un error de sistema.'
                ]
            ], 500);
        }

        if ($exception instanceof \BadMethodCallException) {
            return response()->json([
                'errors' => [
                    'error' => 'Ha ocurrido un error de sistema.'
                ]
            ], 500);
        }

        if ($exception instanceof UnauthorizedException) {
            return response()->json([
                'errors' => [
                    'error' => 'No posee permisos para realizar esta acción.'
                ]
            ], 403);
        }

        return parent::render($request, $exception);
    }
}
