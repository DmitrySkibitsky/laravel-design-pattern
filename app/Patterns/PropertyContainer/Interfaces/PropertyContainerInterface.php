<?php

namespace App\Patterns\PropertyContainer\Interfaces;

interface PropertyContainerInterface
{
    /**
     * addProperty
     *
     * @param  mixed $property_name
     * @param  mixed $value
     * @return void
     */
    public function addProperty(string $property_name, $value);

    /**
     * deleteProperty
     *
     * @param  mixed $property_name
     * @return void
     */
    public function deleteProperty(string $property_name);

    /**
     * getProperty
     *
     * @param  mixed $property_name
     * @return void
     */
    public function getProperty(string $property_name);

    /**
     * setProperty
     *
     * @param  mixed $property_name
     * @param  mixed $value
     * @return void
     */
    public function setProperty(string $property_name, $value);
}
