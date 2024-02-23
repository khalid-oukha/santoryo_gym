@component('mail::message')
hello {{ $name  }}

<p> you can get your password</p>
@component('mail::button' , ['url'=> url('reset/'.$remember_token)])
Reset your password
@endcomponent
<p>In case you have any issues</p>

{{ config('app.name') }}
@endcomponent
