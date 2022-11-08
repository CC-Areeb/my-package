<?php

namespace Areeb\Mypackage;

class MarkdownParser
{
    public static function parse($string)
    {
        return  \Parsedown::instance()->text($string);
    }
}