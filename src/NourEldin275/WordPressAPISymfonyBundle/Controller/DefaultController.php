<?php

namespace NourEldin275\WordPressAPISymfonyBundle\Controller;

use NourEldin275\WordPressAPISymfonyBundle\DependencyInjection\NourEldin275WordPressAPISymfonyExtension;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        $url = $this->getParameter('nour_eldin275_word_press_api_symfony.url');

        $wp_api = $this->get('nour_eldin275_word_press_api_symfony.handler');

        $owlhunt = $wp_api->getWPURL();

        return $this->render('NourEldin275WordPressAPISymfonyBundle:Default:index.html.twig', array('url' => $url, 'owl' => $owlhunt));
    }
}
