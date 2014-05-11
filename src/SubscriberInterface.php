<?php

interface SubscriberInterface
{
    public function subscribe($eventName, $callable);
}
