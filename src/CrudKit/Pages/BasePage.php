<?php

namespace CrudKit\Pages;

abstract class BasePage implements Page
{
    protected $name = "";
    protected $id = null;

    /**
     * @param $name
     * @return $this
     */
    public function setName ($name) {
        $this->name = $name;
        return $this;
    }
    public function getName () {
        return $this->name;
    }

    /**
     * @param $icon
     * @return $this
     */
    public function setIcon ($icon) {
        $this->icon = $icon;
        return $this;
    }
    public function getIcon () {
        return $this->icon;
    }

    protected $app = null;
    public function init ($app = null) {
        if ($app == null) {
            die ("app is null");
        }
        $this->app = $app;
    }

    /**
     * @return null
     */
    public function getId()
    {
        return $this->id;
    }

    protected function setId ($id) {
        $this->id = $id;
    }
}