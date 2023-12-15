<?php
/**
 * Created by PhpStorm.
 * User: Ankit
 * Date: 11/29/2018
 * Time: 7:50 PM
 */

class Common {
    public function getCountries($mysqli){
        $query = "SELECT * FROM bird_countries";
        $result = $mysqli->query($query);
        return $result;
    }

    public function getStatesByCountry($mysqli,$countryId) {
        $query = "SELECT * FROM bird_states WHERE countryId='$countryId'";
        $result = $mysqli->query($query);
        return $result;
    }

    public function getCityByState($mysqli,$stateId)
    {
        $query = "SELECT * FROM bird_cities WHERE state_id='$stateId'";
        $result = $mysqli->query($query);
        return $result;
    }
}
