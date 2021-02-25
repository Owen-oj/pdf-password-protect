<?php

namespace Owenoj\FpdfPasswordProtect;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Owenoj\FpdfPasswordProtect\Skeleton\SkeletonClass
 */
class FpdfPasswordProtectFacade extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'fpdf-password-protect';
    }
}
