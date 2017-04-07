<?php
/**
 * Created by PhpStorm.
 * User: darknd
 * Date: 7/04/17
 * Time: 13:34
 */

namespace Topikito\Acme\Config\Middleware;


use app\Config\Bridge\BaseMiddleware;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

class MonologHandler extends BaseMiddleware
{
    public function load()
    {
        /* BEFORE APP STARTS */
        $this->_app->before(function (Request $request) {
            $this->_app['monolog']->info('INFO');
        });

        /* BEFORE APP FINISHES */
        $this->_app->after(function (Request $request, Response $response) {
            $this->_app['monolog']->info('INFO');

        });

    }

}