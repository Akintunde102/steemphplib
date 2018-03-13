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


    /**
     * @return string
     */
    static $url = 'https://api.steemjs.com/get_active_votes?author=omeratagun&permlink=1bf066c7-23cb-11e8-8cbf-0242ac110002';

    public static function setURL() : string{

        $dap = new Controller();
        return Controller::$url = testrun::$url;

    }

    /**
     * @return string
     */
    public static function getData(){

       $data = new apiConnector;
       return $data->isGetConnected();
   }

}




$readurl = new apiConnector;
var_dump($readurl->getConnect());












