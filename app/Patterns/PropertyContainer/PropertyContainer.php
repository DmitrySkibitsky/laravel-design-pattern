<?php

namespace App\Patterns\PropertyContainer;

use App\Patterns\PropertyContainer\Interfaces\PropertyContainerInterface;
use Exception;

class PropertyContainer implements PropertyContainerInterface
{
    private $property_container = [];

    /**
     * addProperty
     *
     * @param  mixed $property_name
     * @param  mixed $value
     * @return void
     */
    public function addProperty(string $property_name, $value) : void
    {
        $this->property_container[$property_name] = $value;
    }

    /**
     * deleteProperty
     *
     * @param  mixed $property_name
     * @return bool
     */
    public function deleteProperty(string $property_name) : bool
    {
        if (isset($this->property_container[$property_name])) {
            unset($this->property_container[$property_name]);

            return true;
        }

        return false;
    }

    /**
     * getProperty
     *
     * @param  mixed $property_name
     * @return void
     */
    public function getProperty(string $property_name)
    {
        return $this->property_container[$property_name] ?? null;
    }

    /**
     * setProperty
     *
     * @param  mixed $property_name
     * @param  mixed $value
     * @return void
     */
    public function setProperty(string $property_name, $value)
    {
        if (! isset($this->property_container[$property_name])) {
            throw new Exception("Property {$this->property_name} not found");
        }

        $this->property_container[$property_name] = $value;
    }
}
