<?php


class Queue implements Iterator
{

    protected $queue;

    public function __construct()
    {
        $this->clear();
    }

    function clear(){
        $this->queue = [];
        return $this;
    }

    function addToQueue($value){
        $this->queue[] = $value;
        return $this;
    }

    function getFromQueue(){
        return array_shift($this->queue);
    }

    public function current()
    {
        return $this->getFromQueue();
    }

    public function next()
    {

    }

    public function key()
    {
        return 0;
    }

    public function valid()
    {
        return isset( $this->queue[0] );
    }

    public function rewind()
    {

    }
}