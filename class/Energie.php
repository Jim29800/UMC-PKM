<?php
class Energie 
{
    private $type;

    public function __construct($type)
    {
        $this->set_type($type);
    }

    public function set_type($type)
    {
        $this->type = $type;
    }
    public function get_type($type)
    {
        return $this->type;
    }
}