@component('mail::message')
# Welcome!

Welcome to the System, {{ $user->name }}

@component('mail::button', ['url' => 'https://google.co.uk'])
Click here to read more
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
