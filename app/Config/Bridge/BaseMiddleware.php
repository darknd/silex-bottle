<?php

namespace app\Config\Bridge;

use app\Config\Interfaces\Loadable;
use Silex;

abstract class BaseMiddleware implements Loadable
{

    /**
     *
     * @var Silex\Application
     */
    protected $_app;

    /**
     * @param \Silex\Application $app
     */
    public function __construct(Silex\Application $app)
    {
        $this->_app = $app;
    }

}
