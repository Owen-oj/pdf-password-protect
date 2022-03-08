<?php

namespace Owenoj\PdfPasswordProtect\Facade;

use Illuminate\Support\Facades\Facade;


class PdfPasswordProtect extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor(): string
    {
        return 'pdf-password-protect';
    }
}
