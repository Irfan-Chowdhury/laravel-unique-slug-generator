<?php

namespace Irfan\LaravelUniqueSlug\Facades;
use Illuminate\Support\Facades\Facade;

class UniqueSlug extends Facade
{
    /**
     * @see \Irfan\LaravelUniqueSlug\UniqueSlug
     */
    protected static function getFacadeAccessor(): string
    {
        return 'laravel-unique-slug';
    }
}
