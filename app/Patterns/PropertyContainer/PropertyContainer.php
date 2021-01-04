<?php

namespace App\Patterns\PropertyContainer;

use App\Patterns\PropertyContainer\Interfaces\PropertyContainerInterface;
use Exception;

class PropertyContainer implements PropertyContainerInterface
{
    /**
     * @var array
     */
    private $property_container = [];

    /**
     * @param string $property_name
     * @param mixed $value
     *
     * @return void
     */
    public function addProperty(string $property_name, $value) : void
    {
        $this->property_container[$property_name] = $value;
    }

    /**
     * @param string $property_name
     *
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
     * @param string $property_name
     *
     * @return mixed
     */
    public function getProperty(string $property_name)
    {
        return $this->property_container[$property_name] ?? null;
    }

    /**
     * @param string $property_name
     * @param mixed $value
     *
     * @return mixed
     */
    public function setProperty(string $property_name, $value)
    {
        if (! isset($this->property_container[$property_name])) {
            throw new Exception("Property {$this->property_name} not found");
        }

        $this->property_container[$property_name] = $value;
    }
}
