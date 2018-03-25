<?php
/**
 * LogMessage.php
 * Created by @anonymoussc on 03/25/2018 11:54 PM.
 */

namespace Onsigbaar\Foundation\Base\Traits;

use Illuminate\Support\Facades\Log;

trait LogMessage
{
    public function logMessage($error)
    {
        Log::error($error->getMessage());
        Log::error($error->getCode());
        Log::error($error->getFile());
        Log::error($error->getLine());
        Log::error($error->getTraceAsString());
    }
}