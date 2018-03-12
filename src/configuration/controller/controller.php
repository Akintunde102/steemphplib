<?php
/**
 * Created by PhpStorm.
 * User: omera
 * Date: 12.03.2018
 * Time: 21:57
 */

namespace SteemitAPI;


class Controller
{

    public $url = "";
    public static $url_input;

    /**
     * Controller constructor.
     */
    public function inputChecker ()
{

    $url_input = "";
    $this->url = trim($url_input);
    $url_input = strtolower($url_input);
    return Controller::$url_input = $url_input;

}

    /**
     * @return mixed
     */
    protected function setURL(){

       $urlcallback = new apiConnector();
       return Controller::$url_input = $urlcallback->url_input;

}

}