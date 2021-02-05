<?php


namespace App\drivestates;


class CarDriveStates extends DriveState
{
 function __construct()
    {
        parent::__construct();
        parent::setDriveStates(array("PARKING", "NEUTRAL", "DRIVE", "REVERSE"));
    }
}