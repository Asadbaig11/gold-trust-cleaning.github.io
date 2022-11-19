@component('mail::message')
# Message from Client

<b>Name</b> : {{$name}}<br>
<b>Email</b> : {{$email}}<br>
<b>Phone</b> : {{$phone}}<br>
<b>Message</b> : {{$message}}


{{ config('app.name') }}

@endcomponent