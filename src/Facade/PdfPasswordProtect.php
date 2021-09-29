<?php

namespace Owenoj\PdfPasswordProtect\Facade;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Owenoj\PdfPasswordProtect\Skeleton\SkeletonClass
 */
class PdfPasswordProtect extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'pdf-password-protect';
    }
}
