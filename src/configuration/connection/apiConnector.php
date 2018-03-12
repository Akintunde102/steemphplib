<?php
/**
 * Created by PhpStorm.
 * User: omera
 * Date: 10.03.2018
 * Time: 21:42
 */

namespace SteemitAPI;


/**
 * @property bool|string apiconnector
     */
class apiConnector
    {

        protected static $url = '';
        public $url_input = "";

    /**
     * @return string
     */
    public function getURL(){

        return $this->url_input;
}

    /**
     * @return mixed
     */
    public function getConnect()
        {

            $this->apiconnector = file_get_contents($this->getURL());
            return $this->json = json_decode($this->apiconnector,true);
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
