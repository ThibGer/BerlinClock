<?php

class BerlinClock
{
    public function implementSingleMin(int $min): array
    {
        if ($min<0 || $min>59)
            throw new Exception("$min is not available");
        $tab = array('o','o','o','o');
        for($i=0;$i<$min%5;$i++){
            $tab[$i] = 'y';
        }
        return $tab;
    }

    public function implementBlockOfFiveMin(int $min): array
    {
        if ($min<0 || $min>59)
            throw new Exception("$min is not available");
        $tab = array('o','o','o','o','o','o','o','o','o','o','o');
        for($i=1;$i<=$min/5;$i++){
            if ($i%3==0)
                $tab[$i-1] = 'r';
            else
                $tab[$i-1] = 'y';
        }
        return $tab;
    }

    public function implementSingleHours(int $hour): array
    {
        if ($hour<0 || $hour>23)
            throw new Exception("$hour is not available");
        $tab = array('o','o','o','o');
        for($i=0;$i<$hour%5;$i++){
            $tab[$i] = 'r';
        }
        return $tab;
    }

    public function implementBlockOfFiveHours(int $hour): array
    {
        if ($hour<0 || $hour>23)
            throw new Exception("$hour is not available");
        $tab = array('o','o','o','o');
        for($i=1;$i<=$hour/5;$i++){
                $tab[$i-1] = 'r';
        }
        return $tab;
    }

    public function implementSeconds(int $sec): string
    {
        if($sec<0 || $sec>59){
            throw new Exception("$sec is not available");
        }
        if ($sec%2==0)
            return 'r';
        return 'o';
    }

    public function implementClock(string $time): array
    {
        if(preg_match("/^[0-9]{2}:[0-9]{2}:[0-9]{2}$/", $time) != 1)
            throw new Exception("$time is not available format");

        $min = intval(substr($time,3,2));
        $hour = intval(substr($time, 0, 2));
        $sec = intval(substr($time, 6, 2));

        $tabSec = array($this->implementSeconds($sec));
        $tabBlock5Hours = $this->implementBlockOfFiveHours($hour);
        $tabSingleHours = $this->implementSingleHours($hour);
        $tabBlock5Min = $this->implementBlockOfFiveMin($min);
        $tabSingleMin = $this->implementSingleMin($min);

        return array($tabSec, $tabBlock5Hours, $tabSingleHours, $tabBlock5Min, $tabSingleMin);

    }


}
