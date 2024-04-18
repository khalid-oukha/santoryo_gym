@component('mail::message')
# Hello,

Your membership at Santoryo Gym Sale is about to expire soon.

<p>Your membership is set to expire on {{ $end_date }}. Please renew your membership to continue enjoying our services.</p>

@component('mail::button', ['url' => url('reset/'.$end_date)])
Renew Membership
@endcomponent

<p>If you have any questions or concerns, feel free to contact us.</p>

Thanks,<br>
{{ config('app.name') }}
@endcomponent
