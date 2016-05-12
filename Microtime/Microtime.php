<?php
namespace Microtime;

class Microtime
{
    private $microtime;

    public function __construct()
    {
        $this->microtime = $this->calcule();
    }

    private function calcule()
    {
        return array_sum(explode(' ', microtime()));
    }

    public function elapsed()
    {
        return round($this->calcule() - $this->microtime, 2);
    }
}
