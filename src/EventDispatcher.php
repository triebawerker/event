<?php

/**
 * Class EventDispatcher
 */
class EventDispatcher
{
    private $listener = array();

    /**
     * @param Event $event
     * @return mixed
     */
    public function emit(Event $event)
    {
        $className = get_class($event);
        if (array_key_exists($className, $this->listener)) {
            foreach ($this->listener[$className] as $executable) {
                return $executable[0]($executable[1]);
            }
        }
    }

    /**
     * @param $eventName
     * @param $callable
     * @param $argument
     */
    public function on($eventName, $callable, $argument)
    {
        if (isset($this->listener[$eventName]) && !is_array($this->listener[$eventName])) {
            $this->listener[$eventName] = array();
        }
            $this->listener[$eventName][] = array($callable, $argument);
    }
}
