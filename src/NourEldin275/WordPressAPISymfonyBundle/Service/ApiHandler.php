<?php
/**
 * Created by PhpStorm.
 * User: Nour Eldin
 * Date: 1/20/2017
 * Time: 5:21 PM
 */

namespace NourEldin275\WordPressAPISymfonyBundle\Service;


class ApiHandler
{
    private $wordpress_url;

    public function __construct($url)
    {
        $this->setWPURL($url);
    }

    /**
     * Used in the constructor to set the URL configured. Also can be used as a way to change the default URL in case
     * multiple there is a need to call multiple WP installations' APIs
     * @param $url
     * @return $this
     */
    public function setWPURL($url){
        $this->wordpress_url = $url;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getWPURL(){
        return $this->wordpress_url;
    }

}