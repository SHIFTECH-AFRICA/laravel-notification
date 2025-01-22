<?php

namespace Note\Uuids;

use Exception;
use Webpatser\Uuid\Uuid;

trait Uuids
{
    /**
     * Boot function from laravel.
     * @throws Exception
     */
    protected static function boot(): void
    {
        parent::boot();

        static::creating(function ($model) {
            $model->{$model->getKeyName()} = Uuid::generate()->string;
        });
    }
}
