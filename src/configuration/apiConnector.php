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

        public $url = '';
        public $apijson;

        /**
         * apiConnector constructor.
         * @param $url
         */
        public function getConnect()
        {
            $this->url = "https://api.steemjs.com/get_active_votes?author=omeratagun&permlink=1bf066c7-23cb-11e8-8cbf-0242ac110002";
            $this->apiconnector = file_get_contents($this->url);
            return $this->apijson = json_decode($this->apiconnector,true);
        }

        /**
         * @return bool
         */
        public function isGetConnected()
        {

            return $this->apijson != null;


        }
    }
