<?php

namespace Controller;

use Silex\Application;
use Silex\Api\ControllerProviderInterface;
use Symfony\Component\HttpFoundation\Request;
use Model\Posts;


class frontController  implements ControllerProviderInterface
{
    public function connect(Application $app)
    {
        $controllers = $app['controllers_factory'];
        
        $controllers->get('/', function (Application $app) {
            return $app['twig']->render('conteudo/index.twig');
        });
        
        $controllers->get('/posts', function (Application $app) {

            $db = new Posts;

            $data = $db->getAllPosts($app);
            
            if(count($data) > 0) {
                return $app->json($data, 200);
            }
            
            return $app->json(['result' => false], 404);
        });

        $controllers->get('gerapdf/nome/{nome}', function (Application $app, $nome) {
            $db = new Posts;
            $db->getNomePDF($nome);
        });

        $controllers->post('/posts', function (Application $app, Request $request) {
            $nome = $request->get('nome');
            $idade = $request->get('idade');
            $db = new Posts;

            $data = $db->setPosts($app, ['nome'=> $nome, 'idade'=> $idade] );
          
            return $app->json(['result' => true], 200);
        });
        
        return $controllers;
    }
}