<?php

return [
    /*
    |--------------------------------------------------------------------------
    | Revision Model
    |--------------------------------------------------------------------------
    */
    'model' => Venturecraft\Revisionable\Revision::class,
    'connection' => env('REVISION_CONNECTION'),

    'additional_fields' => [],

];
