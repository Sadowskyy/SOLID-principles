<?php


namespace App\drivestates;


class AirplaneDriveStates extends DriveState
{
    public function __construct()
    {
        parent::__construct();
        parent::setDriveStates(array("PARKING", "DRIVE"));
    }
}