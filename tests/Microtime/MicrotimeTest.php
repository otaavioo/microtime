<?php
namespace Microtime;

use Microtime\Microtime;

class MicrotimeTest extends \PHPUnit_Framework_TestCase
{
    public $class;

    public function setUp()
    {
        $this->class = new Microtime();
    }

    public function testItCanBeAMicrotimeInstance()
    {
        $this->assertInstanceOf('Microtime\Microtime', $this->class, 'It must be an instance of Microtime\Microtime');
    }

    public function testItCanReturnAMicrotimeInstance()
    {
        sleep(1);
        $this->assertInstanceOf('Microtime\Microtime', $this->class->elapsed(), 'It must be an instance of Microtime\Microtime');
    }

    public function testItCanReturnElapsedTimeBetweenTwoPoints()
    {
        sleep(1);
        $this->assertGreaterThanOrEqual(1, $this->class->elapsed()->round(), 'It must be greater than 0');
    }
}
