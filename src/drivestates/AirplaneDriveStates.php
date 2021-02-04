<?php


namespace App\drivestates;


class AirplaneDriveStates extends DriveState
{


    /**
     * AirplaneDriveStates constructor.
     */
    public function __construct()
    {
        parent::__construct();
        parent::setDriveStates(array("PARKING", "DRIVE"));
    }
}