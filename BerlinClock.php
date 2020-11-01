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





}

