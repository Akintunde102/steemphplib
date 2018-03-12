<?php
/**
 * Created by PhpStorm.
 * User: omera
 * Date: 11.03.2018
 * Time: 00:54
 */
namespace SteemitAPI;

include 'H:\xampp\htdocs\steemphplib\vendor\autoload.php';

class testrun{

    public function setURL(){

        $input = new Controller;
        $input->url = "https://api.steemjs.com/get_active_votes?author=omeratagun&permlink=1bf066c7-23cb-11e8-8cbf-0242ac110002";
    }

   public static function getData(){

       $data = new apiConnector;
       return $data->isGetConnected();
   }

}

var_dump(testrun::getData());












