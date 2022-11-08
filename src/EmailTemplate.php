<?php

namespace Areeb\Mypackage;

use Illuminate\Support\Facades\File;
use stdClass;

class EmailTemplate 
{
    protected $subject;
    protected $from;
    protected $to;
    protected $message;

    public function __construct($subject, $from, $to, $message)
    {
        $this->to = $to;
        $this->from = $from;
        $this->subject = $subject;
        $this->message = $message;
        $this->EmailFile();
    }

    public function EmailFile()
    {
        $emailContent = new stdClass();
        $emailContent->to = $this->to = "User@mail.com";
        $emailContent->from = $this->from = "Admin@mail.com";
        $emailContent->subject = $this->subject = "Mail template";
        $emailContent->message = $this->message = "I can send mails";
        return $emailContent;
    }
}