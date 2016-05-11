<?php
namespace Microtime;

class Microtime
{
    protected $microtime;

    public function __construct()
    {
        $this->microtime = $this->calcule();
    }

    protected function calcule()
    {
        $microtime = microtime();
        $microtime = explode(' ', $microtime);
        return $microtime = $microtime[1] + $microtime[0];
    }

    public function elapsed()
    {
        return round($this->calcule() - $this->microtime, 2);
    }
}
