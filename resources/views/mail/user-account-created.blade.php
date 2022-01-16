@component('mail::message')
# Welcome to {{config('app.name')}}

Your account has been created. Please click on the "Verify Email" button to verify your email.

@component('mail::button', ['url' => ''])
Verify Email
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
