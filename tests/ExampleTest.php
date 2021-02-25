<?php

namespace Owenoj\FpdfPasswordProtect\Tests;

use Orchestra\Testbench\TestCase;
use Owenoj\FpdfPasswordProtect\FpdfPasswordProtectServiceProvider;

class ExampleTest extends TestCase
{

    protected function getPackageProviders($app)
    {
        return [FpdfPasswordProtectServiceProvider::class];
    }
    
    /** @test */
    public function true_is_true()
    {
        $this->assertTrue(true);
    }
}
