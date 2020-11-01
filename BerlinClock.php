<?php

class BerlinClock
{
    public function implementSingleMin(int $min): array
    {
        $tab = array('o','o','o','o');
        for($i=0;$i<$min%5;$i++){
            $tab[$i] = 'y';
        }
        return $tab;
    }

    public function implementBlockOfFiveMin(int $min): array
    {
        $tab = array('o','o','o','o','o','o','o','o','o','o','o');
        for($i=1;$i<=$min/5;$i++){
            if ($i%3==0)
                $tab[$i-1] = 'r';
            else
                $tab[$i-1] = 'y';
        }
        return $tab;
    }

    public function implementSingleHour(int $hour): array
    {
        $tab = array('o','o','o','o');
        for($i=0;$i<$hour%5;$i++){
            $tab[$i] = 'r';
        }
        return $tab;
    }

    public function implementBlockOfFiveHours(int $hour): array
    {
        $tab = array('o','o','o','o');
        for($i=1;$i<=$hour/5;$i++){
                $tab[$i-1] = 'r';
        }
        return $tab;
    }


}
