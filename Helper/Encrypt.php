<?php

namespace Helper;

class Hash
{
    public static function make(string $input)
    {
        return hash('md5', $input);
    }
}
