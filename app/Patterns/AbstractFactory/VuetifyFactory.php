<?php

namespace App\Patterns\AbstractFactory;

class VuetifyFactory extends AbstractGuiFactory
{
    /**
     * getButtonClasses
     *
     * @return string
     */
    public function getButtonClasses(): string
    {
        return 'btn btn-vuetify';
    }

    /**
     * getCheckboxClasses
     *
     * @return string
     */
    public function getCheckboxClasses(): string
    {
        return 'checkbox checkbox-vuetify';
    }
}
