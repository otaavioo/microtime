<?php
namespace Microtime;

class Microtime
{
    private $microtime;
    private $elapsed;

    public function __construct()
    {
        $this->microtime = $this->calcule();

        return $this;
    }

    private function calcule()
    {
        return array_sum(explode(' ', microtime()));
    }

    public function elapsed()
    {
        $this->elapsed = $this->calcule() - $this->microtime;
        return $this;
    }

    public function round($round = 2)
    {
        return round($this->elapsed, $round);
    }
}
