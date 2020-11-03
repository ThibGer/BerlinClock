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

    public function test_convertToBlockOfFiveMinutes_given3NegativeNumberMinutes_shouldReturn_exception(){
        $berlinClock = new BerlinClock();
        $min = -3;
        try{
            $actual = $berlinClock->implementBlockOfFiveMin($min);
        } catch(Exception $e){
            $this->assertEquals("$min is not available",$e->getMessage());
        }

    }

    public function test_convertToSingleHours_given12Hours_shouldReturn_array_rroo(){
        $berlinClock = new BerlinClock();
        $actual = $berlinClock->implementSingleHours(12);
        $tabExpected = array('r','r','o','o');
        $this->assertEquals($tabExpected,$actual);

    }

    public function test_convertToSingleHours_given1Hour_shouldReturn_array_rooo(){
        $berlinClock = new BerlinClock();
        $actual = $berlinClock->implementSingleHours(1);
        $tabExpected = array('r','o','o','o');
        $this->assertEquals($tabExpected,$actual);

    }

    public function test_convertToSingleHours_given0Hour_shouldReturn_array_oooo(){
        $berlinClock = new BerlinClock();
        $actual = $berlinClock->implementSingleHours(0);
        $tabExpected = array('o','o','o','o');
        $this->assertEquals($tabExpected,$actual);

    }

    public function test_convertToSingleHours_given24Hours_shouldReturn_exception(){
        $berlinClock = new BerlinClock();
        $hour = 24;
        try{
            $actual = $berlinClock->implementSingleHours($hour);
        } catch(Exception $e){
            $this->assertEquals("$hour is not available",$e->getMessage());
        }

    }

    public function test_convertToBlockOfFiveHours_given12Hours_shouldReturn_array_rroo(){
        $berlinClock = new BerlinClock();
        $actual = $berlinClock->implementBlockOfFiveHours(12);
        $tabExpected = array('r','r','o','o');
        $this->assertEquals($tabExpected,$actual);

    }

    public function test_convertToBlockOfFiveHours_given23Hours_shouldReturn_array_rrrr(){
        $berlinClock = new BerlinClock();
        $actual = $berlinClock->implementBlockOfFiveHours(23);
        $tabExpected = array('r','r','r','r');
        $this->assertEquals($tabExpected,$actual);

    }

    public function test_convertToBlockOfFiveHours_given2Hours_shouldReturn_array_oooo(){
        $berlinClock = new BerlinClock();
        $actual = $berlinClock->implementBlockOfFiveHours(2);
        $tabExpected = array('o','o','o','o');
        $this->assertEquals($tabExpected,$actual);

    }

    public function test_convertToBlockOfFiveHours_given5NegativeNumberHours_shouldReturn_exception(){
        $berlinClock = new BerlinClock();
        $hour = -5;
        try{
            $actual = $berlinClock->implementBlockOfFiveHours($hour);
        } catch(Exception $e){
            $this->assertEquals("$hour is not available",$e->getMessage());
        }

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

    public function test_convertToSeconds_given60Seconds_shouldReturn_exception(){
        $berlinClock = new BerlinClock();
        $sec = 60;
        try{
            $actual = $berlinClock->implementSeconds($sec);
        } catch(Exception $e){
            $this->assertEquals("$sec is not available",$e->getMessage());
        }

    }

    public function test_convertToSeconds_given200NegativeNumberSeconds_shouldReturn_exception(){
        $berlinClock = new BerlinClock();
        $sec = -200;
        try{
            $actual = $berlinClock->implementSeconds($sec);
        } catch(Exception $e){
            $this->assertEquals("$sec is not available",$e->getMessage());
        }

    }

    public function test_convertToBerlinClock_given11H56M45S_shouldReturn_arrayOfArray_o_rroo_rooo_yyryyryyryy_yooo(){
        $berlinClock = new BerlinClock();
        $time = "11:56:45";

        $tabSec = array('o');
        $tabBlock5Hours = array('r','r','o','o');
        $tabSingleHours = array('r','o','o','o');
        $tabBlock5Min = array('y','y','r','y','y','r','y','y','r','y','y');
        $tabSingleMin = array('y','o','o','o');

        $clock = array($tabSec, $tabBlock5Hours, $tabSingleHours, $tabBlock5Min, $tabSingleMin);

        try{
            $actual = $berlinClock->implementClock($time);
            $this->assertEquals($clock,$actual);
        } catch(Exception $e){
            $this->assertEquals("$time is not available format",$e->getMessage());
        }

    }

    public function test_convertToBerlinClock_given23H07M02S_shouldReturn_arrayOfArray_r_rrrr_rrro_yoooooooooo_yyoo(){
        $berlinClock = new BerlinClock();
        $time = "23:07:02";

        $tabSec = array('r');
        $tabBlock5Hours = array('r','r','r','r');
        $tabSingleHours = array('r','r','r','o');
        $tabBlock5Min = array('y','o','o','o','o','o','o','o','o','o','o');
        $tabSingleMin = array('y','y','o','o');

        $clock = array($tabSec, $tabBlock5Hours, $tabSingleHours, $tabBlock5Min, $tabSingleMin);

        try{
            $actual = $berlinClock->implementClock($time);
            $this->assertEquals($clock,$actual);
        } catch(Exception $e){
            $this->assertEquals("$time is not available format",$e->getMessage());
        }

    }










}
