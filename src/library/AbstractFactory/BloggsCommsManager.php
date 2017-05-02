<?php

namespace src\library\AbstractFactory;

class BloggsCommsManager extends CommsManager
{
    public function getHeaderText() {
        return "BloggsCal header\n";
    }

    public function make($flag_int) {
        switch ($flag_int) {
            case self::APPT:
                return new BloggsApptEncoder();
            case self::CONTACT:
                return new BloggsContactEncoder();
            case self::TTD:
                return new BloggsTtdEncoder();
        }
    }

  

    function getFooterText() {
        return "BloggsCal footer\n";
    }
}
