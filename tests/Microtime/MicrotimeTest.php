<?php
namespace Microtime;

use Microtime\Microtime;

class MicrotimeTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @test
     */
    public function itCanBeAMicrotimeInstance()
    {
        $this->assertInstanceOf('Microtime\Microtime', new Microtime(), 'It must be an instance of Microtime\Microtime');
    }

    /**
     * @test
     */
    public function itCanReturnElapsedTimeBetweenTwoPoints()
    {
        $class = new Microtime();
        sleep(1);
        $this->assertGreaterThanOrEqual(1, $class->elapsed(), 'It must be greater than 0');
    }
}
