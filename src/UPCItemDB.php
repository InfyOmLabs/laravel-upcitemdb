<?php

namespace InfyOm\UPCItemDB;

use Illuminate\Support\Facades\Facade;

class UPCItemDB extends Facade
{
    /**
     * Get the binding in the IoC container
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'upcitemdb';
    }
}