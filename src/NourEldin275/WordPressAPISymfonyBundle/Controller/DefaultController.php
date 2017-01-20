<?php

namespace NourEldin275\WordPressAPISymfonyBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('NourEldin275WordPressAPISymfonyBundle:Default:index.html.twig');
    }
}
