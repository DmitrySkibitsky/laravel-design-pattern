<?php

namespace App\Patterns\PropertyContainer;

use App\Patterns\PropertyContainer\PropertyContainer;

class News extends PropertyContainer
{
    /**
     * title
     *
     * @var string
     */
    private $title;

    /**
     * description
     *
     * @var string
     */
    private $description;

    /**
     * getTitle
     *
     * @return string
     */
    public function getTitle() : string
    {
        return $this->title;
    }

    /**
     * getDescription
     *
     * @return string
     */
    public function getDescription() : string
    {
        return $this->description;
    }

    /**
     * setTitle
     *
     * @param  mixed $title
     * @return News
     */
    public function setTitle(string $title) : News
    {
        $this->title = $title;

        return $this;
    }

    /**
     * setDescription
     *
     * @param  mixed $description
     * @return News
     */
    public function setDescription(string $description) : News
    {
        $this->description = $description;

        return $this;
    }
}
