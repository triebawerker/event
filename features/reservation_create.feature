Feature: Create a reservation
  In order to make a ride
  As a customer
  I have to create a reservation

  Scenario: A new reservation has no approval
    Given there is a Customer
    When I create a reservation
    Then the approval status should be "unapproved"

  Scenario: A new reservation has to be approved by a PSP
    Given there is a Customer
      And there is a Reservation
    When my reservation has the status "unapproved"
    Then the PSP should be called and return "success"
