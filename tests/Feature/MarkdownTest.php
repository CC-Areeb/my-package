<?php

namespace Areeb\Mypackage\Tests;

use Illuminate\Mail\Markdown;
use Orchestra\Testbench\TestCase;
use Parsedown;

class MarkdownTest extends TestCase
{
    public function test_h1_markdown()
    {
        $this->assertEquals('<h1>Heading</h1>', Markdown::parse('# Heading'));
    }
}