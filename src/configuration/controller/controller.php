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
    public static $url = '';
    public static $url_input = "";

    /**
     * @param $url
     * @return string
     */
    public function setUrl()
    {
        return Controller::$url;
    }
    /**
     * @return string
     */
    public function inputChecker() : string
    {
        $filter = trim(Controller::$url);
        $filter =strtolower(Controller::$url);
        return Controller::$url_input = $filter;
    }
}
