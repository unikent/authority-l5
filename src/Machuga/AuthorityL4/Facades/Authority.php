<?php
namespace Machuga\AuthorityL4\Facades;

use Illuminate\Support\Facades\Facade;

class Authority extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor() { return 'authority'; }

}
