<?php

namespace Omatech\Mage\App\Exceptions;

use Illuminate\Contracts\Container\Container;
use Throwable;
use Illuminate\Contracts\Debug\ExceptionHandler as ExceptionHandlerContract;
use Illuminate\Support\Facades\Route;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;
use Illuminate\Database\Eloquent\ModelNotFoundException;

class CustomHandler implements ExceptionHandlerContract
{
    public function __construct(Container $container, ExceptionHandlerContract $appExceptionHandler)
    {
        $this->container = $container;
        $this->appExceptionHandler = $appExceptionHandler;
    }

    /**
     * Render an exception into an HTTP response.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Exception  $exception
     * @return \Illuminate\Http\Response
     */
    public function render($request, Throwable $exception)
    {
        $url = null;

        if (config('mage.prefix') == "") {
            $url = '*';
        } else {
            $url = config('mage.prefix').'/*';
        }

        if ($request->is($url)) {
            if ($exception instanceof NotFoundHttpException) {
                return $this->exception(404, $request, $exception);
            }

            if ($exception instanceof ModelNotFoundException) {
                return $this->exception(404, $request, $exception);
            }

            if ($exception instanceof ForbiddenException) {
                return $this->exception(403, $request, $exception);
            }

            if ($exception instanceof UnauthorizedException) {
                if ($request->route()->getName() == 'mage.auth.login') {
                    return redirect()->route('mage.auth.login')->with('status', 'unauthorized');
                }

                return $this->exception(401, $request, $exception);
            }
        }

        return $this->appExceptionHandler->render($request, $e);
    }

    private function exception($code, $request, $exception)
    {
        if ($request->ajax() || $request->wantsJson()) {
            return response()->json([
                'status' => $code,
                'message' => $exception->getMessage()
            ], $code);
        }

        return Route::respondWithRoute("mage.error$code", $request);
    }

    public function report(Throwable $e)
    {
        $this->appExceptionHandler->report($e);
    }

    public function renderForConsole($output, Throwable $e)
    {
        $this->appExceptionHandler->renderForConsole($output, $e);
    }

    public function shouldReport(Throwable $e)
    {
        return $this->appExceptionHandler->shouldReport($e);
    }
}
