<?php

namespace App\Patterns\Singleton;

use App\Traits\SingletonTrait;

/**
 * AdvancedSingleton
 *
 * В синглтон стараемся не сохранять классы которые имеют в себе изменяемое состояние
 * так как в последствии будет непредсказуемое поведение
 */
class AdvancedSingleton
{
    use SingletonTrait;

    /**
     * title
     *
     * @var string
     */
    private $title;

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
