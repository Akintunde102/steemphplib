<?php
/**
 * Created by PhpStorm.
 * User: omera
 * Date: 10.03.2018
 * Time: 21:54
 */

namespace SteemitAPI;

class getVoters
{

    /**
     * @return bool
     */
    public function getVoterList(){
        $connector = new apiConnector();

        return $connector->getConnect();

    }







}
?>