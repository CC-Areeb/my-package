<?php

namespace Areeb\Mypackage\Tests;

use Orchestra\Testbench\TestCase;
use Parsedown;

class MarkdownTest extends TestCase
{
    public function test_markdown()
    {
        $Parsedown = new Parsedown();
        dd(
            $Parsedown->text('Hello!')  
        );
    }
}