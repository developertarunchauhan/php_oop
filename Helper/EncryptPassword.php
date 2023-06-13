<?php

namespace Helper\Password;

class Hash
{
    public static function make(string $input)
    {
        return hash('md5', $input);
    }
}
