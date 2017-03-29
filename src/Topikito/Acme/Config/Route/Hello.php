<?php

namespace Topikito\Acme\Config\Route;

use app\Config\Bridge\Router;
use Silex\Application;
use \Topikito\Acme\Controller;

/**
 * Class Hello
 *
 * @package Topikito\Acme\Config\Route
 */
class Hello extends Router
{

    public function load()
    {
        $this->_app->match('/hello/{name}', function ($name) {
            $controller = new Controller\Hello($this->_app);
            return $controller->index($name);
        });
    }

}
