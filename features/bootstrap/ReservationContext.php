<?php

use Behat\Behat\Context\BehatContext;
use Behat\Behat\Exception\PendingException;

class ReservationContext extends BehatContext
{
    /** @var  Customer $customer */
    private $customer;

    /** @var  Reservation $reservation */
    private $reservation;

    /**
     * @Given /^there is a Customer$/
     */
    public function thereIsACustomer()
    {
        $this->customer = new Customer();
    }

    /**
     * @When /^I create a reservation$/
     */
    public function iCreateAReservation()
    {
        $this->reservation = new Reservation();
    }

    /**
     * @Then /^the approval status should be \"([^\"]*)\"$/
     */
    public function theApprovalStatusShouldBe($arg1)
    {
        assertEquals($this->reservation->getStatus(), $arg1);
    }

    /**
     * @Given /^there is a Reservation$/
     */
    public function thereIsAReservation()
    {
        throw new PendingException();
    }

    /**
     * @When /^my reservation has the status "([^"]*)"$/
     */
    public function myReservationHasTheStatus($arg1)
    {
        throw new PendingException();
    }

    /**
     * @Then /^the PSP should be called and return "([^"]*)"$/
     */
    public function thePspShouldBeCalledAndReturn($arg1)
    {
        throw new PendingException();
    }


}
