<?php

/**
 * Class Reservation
 */
class Reservation
{

    /** @var string $status */
    private $status = "unapproved";

    /**
     * @return string
     */
    public function getStatus()
    {
        return $this->status;
    }
}
