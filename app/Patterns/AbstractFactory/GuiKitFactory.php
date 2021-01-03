<?php

namespace App\Patterns\AbstractFactory;

use App\Patterns\AbstractFactory\Interfaces\GuiFactoryInterface;

class GuiKitFactory
{
    /**
     * getFactory
     *
     * @param  string $type
     * @return GuiFactoryInterface
     */
    public function getFactory(string $type = 'bootstrap') : GuiFactoryInterface
    {
        switch ($type) {
            case 'bootstrap':
                $factory = new BootstrapFactory();
                break;
            case 'vuetify':
                $factory = new VuetifyFactory();
                break;
            default:
                $factory = new BootstrapFactory();
        }

        return $factory;
    }
}
