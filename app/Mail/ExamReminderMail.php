<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class ExamReminderMail extends Mailable
{
    use Queueable, SerializesModels;

    public $examDate;
    public $examTopic;

    public function __construct($examTopic, $examDate)
    {
        $this->examTopic = $examTopic;
        $this->examDate = $examDate;
    }

    public function build()
    {
        return $this->subject('Exam topic Reminder')
                    ->markdown('emails.exam_reminder');
    }
}
