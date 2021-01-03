<?php

namespace App\Patterns\Singleton;

use App\Patterns\Singleton\Interfaces\LaravelSingletonInterface;

class LaravelSingleton implements LaravelSingletonInterface
{
    /**
     * title
     *
     * @var string
     */
    public $title;

    /**
     * setTitle
     *
     * @param  string $title
     * @return void
     */
    public function setTitle(string $title) : void
    {
        $this->title = $title;
    }
}
