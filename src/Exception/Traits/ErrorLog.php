<?php
/**
 * ErrorLog.php
 * Created by @anonymoussc on 01/28/2018 3:57 AM.
 */

namespace Onsigbaar\Foundation\Exception\Traits;

use Illuminate\Support\Facades\Log;

trait ErrorLog
{
    public function errorLog($error)
    {
        Log::error($error->getMessage());
        Log::error($error->getCode());
        Log::error($error->getFile());
        Log::error($error->getLine());
        Log::error($error->getTraceAsString());
    }
}