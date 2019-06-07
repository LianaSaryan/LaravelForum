@component('mail::message')
# Account Deleted

# The META + Labs Forum account has been deleted for {{ $user->username }}.

Thanks,<br>
{{ config('app.name') }}
@endcomponent
