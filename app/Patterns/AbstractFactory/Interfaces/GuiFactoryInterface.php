<?php

namespace App\Patterns\AbstractFactory\Interfaces;

interface GuiFactoryInterface
{
    /**
     * getButtonClasses
     *
     * @return string
     */
    public function getButtonClasses() : string;

    /**
     * getCheckboxClasses
     *
     * @return string
     */
    public function getCheckboxClasses() : string;

    /**
     * gui
     *
     * @return object
     */
    public function gui() : object;
}
