<?php

namespace App\Patterns\Singleton\Interfaces;

interface LaravelSingletonInterface
{
    /**
     * setTitle
     *
     * @param  string $title
     * @return void
     */
    public function setTitle(string $title) : void;
}
