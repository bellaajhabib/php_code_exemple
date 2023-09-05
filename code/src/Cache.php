<?php

namespace App;

class Cache
{
    public function get($key)
    {
        return false;
    }

    public function has($key)
    {
        return false;
    }

    public function set($key, $value, $expiration = 36000)
    {
        return false;
    }
}