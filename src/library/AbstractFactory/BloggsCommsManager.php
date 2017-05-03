<?php

namespace src\library\AbstractFactory;

use src\library\Factory\BloggsApptEncoder;
use src\library\Factory\BloggsContactEncoder;
use src\library\Factory\BloggsTtdEncoder;

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

    public function getFooterText() {
        return "BloggsCal footer\n";
    }
}
