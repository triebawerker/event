<?php

/**
 * Class EventDispatcher
 */
class EventDispatcher
{
    private $listener = array();

    public function emit(Event $event)
    {
        $className = get_class($event);
        if (array_key_exists($className, $this->listener)) {
            foreach ($this->listener[$className] as $callable) {
                return $callable();
            }
        }
    }

    /**
     * @param $eventName
     * @param $callable
     */
    public function on($eventName, $callable)
    {
        if (isset($this->listener[$eventName]) && !is_array($this->listener[$eventName])) {
            $this->listener[$eventName] = array();
        }
            $this->listener[$eventName][] = $callable;
    }
}
