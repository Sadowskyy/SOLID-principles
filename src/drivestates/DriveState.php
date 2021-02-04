<?php


namespace App\drivestates;


class DriveState
{
    private $driveStates = array();

    public function __construct()
    {
    }
    public function getDriveStates(): array
    {
        return $this->driveStates;
    }

    public function setDriveStates(array $driveStates): void
    {
        $this->driveStates = $driveStates;
    }


}