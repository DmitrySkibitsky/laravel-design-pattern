<?php

namespace App\Patterns\AbstractFactory;

class BootstrapFactory extends AbstractGuiFactory
{
    /**
     * getButtonClasses
     *
     * @return string
     */
    public function getButtonClasses(): string
    {
        return 'btn btn-bootstrap';
    }

    /**
     * getCheckboxClasses
     *
     * @return string
     */
    public function getCheckboxClasses(): string
    {
        return 'checkbox checkbox-bootstrap';
    }
}
