@component('mail::message')
# New User: {{ $user->username }}

# Welcome to MEAT LABS Inc. Forum! Begin posting amazing ideas by first signing in to the link below!

@component('mail::button', ['url' => url('/login') ])
Sign in
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent


