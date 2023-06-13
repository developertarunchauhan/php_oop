<?php

namespace Model;

class User
{
    public $num;


    public static function all()
    {
        echo "Select * from `users`";
    }
    public static function where($key, $value)
    {
        echo "Select * from `users` where `" . $key . "` = `" . $value . "`";
    }
    public static function findOrFail($id)
    {
        echo "Select * from 'users' where `id` = " . $id . "`";
    }

    public function one()
    {
        echo "ONE<br>";
        $this->num = 10;
        return $this;
    }

    public function two()
    {
        echo "TWO<br>";
        $this->num =  $this->num - 5;
        return $this;
    }
    public function three()
    {
        echo "THREE<br>";
        $this->num = $this->num * 5;
        echo $this->num;
        return $this;
    }
}
