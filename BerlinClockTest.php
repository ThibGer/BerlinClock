<?php

//require "vendor/autoload.php";
require "BerlinClock.php";
use PHPUnit\Framework\TestCase;

class BerlinClockTest extends TestCase
{

    public function test_convert_given53Minutes_shouldReturn_array_yyyo(){
        $berlinClock = new BerlinClock();
        $actual = $berlinClock->implementSingleMin(53);
        $tabExpected = array('y','y','y','o');
        $this->assertEquals($tabExpected,$actual);

    }







}
