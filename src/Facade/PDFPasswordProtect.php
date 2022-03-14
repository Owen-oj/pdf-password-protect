<?php

namespace Owenoj\PDFPasswordProtect\Facade;

use Illuminate\Support\Facades\Facade;


class PDFPasswordProtect extends Facade
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
