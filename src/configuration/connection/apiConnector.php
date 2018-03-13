<?php
/**
 * Created by PhpStorm.
 * User: omera
 * Date: 10.03.2018
 * Time: 21:42
 */

namespace SteemitAPI;



class apiConnector
    {


       public static $url_input = "";

    /**
     * @return string
     */

    public function getURL(){


        return $this->test = Controller::$url_input = apiConnector::$url_input;
}

    /**
     * @return mixed
     */
    public function getConnect()
        {
            $connectme = '';
            $connectme = file_get_contents(apiConnector::$url_input);
            return $this->json = json_decode($connectme,true);
        }

    /**
     * @return string
     */
    public function isGetConnected()
        {

        if($this->getConnect() == null){
            return $error = "Please check the url or you did something wrong";

        }
        else {

            return $success = "Everything is working good";

        }

        }



}
