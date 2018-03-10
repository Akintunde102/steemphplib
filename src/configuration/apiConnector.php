<?php
/**
 * Created by PhpStorm.
 * User: omera
 * Date: 10.03.2018
 * Time: 21:42
 */

namespace SteemitAPI {


    class apiConnector
    {

        public $url = '';

        /**
         * apiConnector constructor.
         */
        public function __construct()
        {
            $this->url = "";
            $this->apiconnector = file_get_contents($this->url);
            return $this->apijson = json_decode($this->apiconnector);
        }

        /**
         * @return bool
         */
        public function isGetConnected ()
        {
            return $this->apijson != null;

        }
    }
}