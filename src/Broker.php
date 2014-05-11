<?php

class Broker
{
    /** @var  EventDispatcher $eventDispatcher */
    private $eventDispatcher;

    /** @var  PspService $pspService */
    private $pspService;

    public function __construct(
        EventDispatcher $eventDispatcher,
        PspService $pspService
    ) {
        $this->pspService = $pspService;

        $this->eventDispatcher = $eventDispatcher;
        $this->eventDispatcher->on(
            "ReservationCreatedEvent",
            function () {
                return "Reservation created";
            }
        );
    }

    /**
     * @return PspService
     */
    public function getPspService()
    {
        return $this->pspService;
    }
}
