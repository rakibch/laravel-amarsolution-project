@component('mail::message')
# Exam Reminder

Dear Student,

This is a reminder about the upcoming exam on **{{ $examDate }}**.

**Topic:** {{ $examTopic }}

Please prepare accordingly.

Thanks,<br>
{{ config('app.name') }}
@endcomponent
