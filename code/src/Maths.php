<?php

namespace App;

class Maths
{
    public function getFloor($nb)
    {
        return floor($nb);
    }

    public function getCeil($nb)
    {
        return ceil($nb);
    }

    public function getRound($nb)
    {
        return round($nb);
    }

       public function getMtSrand($nb)
    {
        return mt_srand($nb);
    }
}