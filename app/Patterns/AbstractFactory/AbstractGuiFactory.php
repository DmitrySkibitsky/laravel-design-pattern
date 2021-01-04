<?php

namespace App\Patterns\AbstractFactory;

use App\Patterns\AbstractFactory\Interfaces\GuiFactoryInterface;

abstract class AbstractGuiFactory implements GuiFactoryInterface
{
    /**
     * gui
     *
     * @return object
     */
    public function gui() : object
    {
        return (object) [
            'btn' => $this->getButtonClasses(),
            'checkbox' => $this->getCheckboxClasses(),
        ];
    }
}
