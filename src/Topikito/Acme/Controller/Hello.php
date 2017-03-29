<?php

namespace Topikito\Acme\Controller;

use app\Core;
use Topikito\Acme\Plugin\AuthUser;
use Topikito\Acme\Sal;
use Silex\Application;

/**
 * Class Hello
 *
 * @package Topikito\Acme\Controller
 */
class Hello extends Core\BaseController
{

    /**
     * @param Application $app
     */
    public function __construct(Application $app)
    {
        parent::__construct($app);
        $this->initView([
            'pageTitle' => 'Hello',
            'pageDescription' => 'Hi user!.',
        ]);
    }

    /**
     * @return mixed
     */
    public function index($name)
    {
            return $this->view->render('Hello/index.html.twig', [ 'name' => $name] );
    }

}
