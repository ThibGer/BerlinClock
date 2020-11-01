<?php

//require "vendor/autoload.php";
require "BerlinClock.php";
use PHPUnit\Framework\TestCase;

class BerlinClockTest extends TestCase
{

    public function test_convertToSingleMinutes_given53Minutes_shouldReturn_array_yyyo(){
        $berlinClock = new BerlinClock();
        $actual = $berlinClock->implementSingleMin(53);
        $tabExpected = array('y','y','y','o');
        $this->assertEquals($tabExpected,$actual);

    }

    public function test_convertToSingleMinutes_given42Minutes_shouldReturn_array_yyyo(){
        $berlinClock = new BerlinClock();
        $actual = $berlinClock->implementSingleMin(42);
        $tabExpected = array('y','y','o','o');
        $this->assertEquals($tabExpected,$actual);

    }

    public function test_convertToBlockOfFiveMinutes_given53Minutes_shouldReturn_array_yyryyryyryo(){
        $berlinClock = new BerlinClock();
        $actual = $berlinClock->implementBlockOfFiveMin(53);
        $tabExpected = array('y','y','r', 'y', 'y', 'r', 'y', 'y', 'r', 'y','o');
        $this->assertEquals($tabExpected,$actual);

    }









}
