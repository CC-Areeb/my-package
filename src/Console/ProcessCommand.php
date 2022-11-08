<?php

namespace Areeb\Mypackage\Console;

use Areeb\Mypackage\EmailTemplate;
use Illuminate\Console\Command;

class ProcessCommand extends Command
{
    protected $subject;
    protected $from;
    protected $to;
    protected $message;
    protected $signature = 'dump:email'; 
    protected $description = 'Send an email file.';

    public function handle()
    {
        // A command to dump mail file to see its contents
        $email = new EmailTemplate("", "", "", "");
        dd($email);
    }
}