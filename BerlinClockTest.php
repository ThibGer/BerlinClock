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

    public function test_convertToSingleMinutes_given42Minutes_shouldReturn_array_yyoo(){
        $berlinClock = new BerlinClock();
        $actual = $berlinClock->implementSingleMin(42);
        $tabExpected = array('y','y','o','o');
        $this->assertEquals($tabExpected,$actual);

    }

    public function test_convertToSingleMinutes_given87Minutes_shouldReturn_exception(){
        $berlinClock = new BerlinClock();
        $min = 87;
        try{
            $actual = $berlinClock->implementSingleMin($min);
        } catch(Exception $e){
            $this->assertEquals("$min is not available",$e->getMessage());
        }

    }

    public function test_convertToBlockOfFiveMinutes_given53Minutes_shouldReturn_array_yyryyryyryo(){
        $berlinClock = new BerlinClock();
        $actual = $berlinClock->implementBlockOfFiveMin(53);
        $tabExpected = array('y','y','r', 'y', 'y', 'r', 'y', 'y', 'r', 'y','o');
        $this->assertEquals($tabExpected,$actual);

    }

    public function test_convertToBlockOfFiveMinutes_given24Minutes_shouldReturn_array_yyryooooooo(){
        $berlinClock = new BerlinClock();
        $actual = $berlinClock->implementBlockOfFiveMin(24);
        $tabExpected = array('y','y','r', 'y', 'o', 'o', 'o', 'o', 'o', 'o','o');
        $this->assertEquals($tabExpected,$actual);

    }

    public function test_convertToSingleHours_given12Hours_shouldReturn_array_rroo(){
        $berlinClock = new BerlinClock();
        $actual = $berlinClock->implementSingleHour(12);
        $tabExpected = array('r','r','o','o');
        $this->assertEquals($tabExpected,$actual);

    }

    public function test_convertToSingleHours_given1Hour_shouldReturn_array_rooo(){
        $berlinClock = new BerlinClock();
        $actual = $berlinClock->implementSingleHour(1);
        $tabExpected = array('r','o','o','o');
        $this->assertEquals($tabExpected,$actual);

    }

    public function test_convertToSingleHours_given0Hour_shouldReturn_array_oooo(){
        $berlinClock = new BerlinClock();
        $actual = $berlinClock->implementSingleHour(0);
        $tabExpected = array('o','o','o','o');
        $this->assertEquals($tabExpected,$actual);

    }

    public function test_convertToBlockOfFiveHours_given12Hours_shouldReturn_array_rroo(){
        $berlinClock = new BerlinClock();
        $actual = $berlinClock->implementBlockOfFiveHours(12);
        $tabExpected = array('r','r','o','o');
        $this->assertEquals($tabExpected,$actual);

    }

    public function test_convertToBlockOfFiveHours_given24Hours_shouldReturn_array_rrrr(){
        $berlinClock = new BerlinClock();
        $actual = $berlinClock->implementBlockOfFiveHours(24);
        $tabExpected = array('r','r','r','r');
        $this->assertEquals($tabExpected,$actual);

    }

    public function test_convertToBlockOfFiveHours_given2Hours_shouldReturn_array_oooo(){
        $berlinClock = new BerlinClock();
        $actual = $berlinClock->implementBlockOfFiveHours(2);
        $tabExpected = array('o','o','o','o');
        $this->assertEquals($tabExpected,$actual);

    }

    public function test_convertToSeconds_given50Seconds_shouldReturn_string_r(){
        $berlinClock = new BerlinClock();
        $actual = $berlinClock->implementSeconds(50);
        $this->assertEquals('r',$actual);

    }

    public function test_convertToSeconds_given1Second_shouldReturn_string_o(){
        $berlinClock = new BerlinClock();
        $actual = $berlinClock->implementSeconds(1);
        $this->assertEquals('o',$actual);

    }

    public function test_convertToSeconds_given0Second_shouldReturn_string_r(){
        $berlinClock = new BerlinClock();
        $actual = $berlinClock->implementSeconds(0);
        $this->assertEquals('r',$actual);

    }






}
