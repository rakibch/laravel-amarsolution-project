<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Models\Student;
use App\Mail\ExamReminderMail;
use Illuminate\Support\Facades\Mail;

class SendExamReminderEmails extends Command
{
    protected $signature = 'email:send-exam-reminder';

    protected $description = 'Send exam reminder emails to all students';

    public function handle()
    {
        $examDate = '2025-08-15';
        $examTopic = 'Exam topic Reminder';

        $students = Student::all();

        $this->info('Sending emails to ' . $students->count() . ' students...');

        foreach ($students as $student) {
            Mail::to($student->email)->send(new ExamReminderMail($examTopic, $examDate));
            $this->info('Sent to: ' . $student->email);
        }

        $this->info('All reminder emails have been sent.');

        return 0;
    }
}
