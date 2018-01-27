<?php
/**
 * JsendResponseMacroServiceProvider.php
 * Created by @anonymoussc on 01/28/2018 1:05 AM.
 */

namespace Onsigbaar\Foundation\HttpResponse\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Response;

class JsendResponseMacroServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        Response::macro('jsend', function($data, array $param = []) {
            return $data;
        });

        Response::macro('success', function($data, array $param = []) {
            return Response::json([
                'status' => 'success',
                'data'   => $data,
            ]);
        });
        Response::macro('fail', function($data = null, array $param = []) {
            return Response::json([
                'status' => 'fail',
                'data'   => $data,
            ]);
        });
        Response::macro('error', function($message, $code = null, $data = null, array $param = []) {
            return Response::json([
                'status'  => 'error',
                'message' => $message,
                'code'    => $code,
                'data'    => $data,
            ]);
        });
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}