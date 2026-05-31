@component('mail::message')
# New Contact Form Submission

You have received a new message from the website contact form.

**Name:** {{ $data['full_name'] }}  
**Email:** {{ $data['email'] }}  
**Contact No:** {{ $data['contact_no'] }}  
**Subject:** {{ $data['subject'] }}

**Message:**
@component('mail::panel')
{{ $data['message'] }}
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
