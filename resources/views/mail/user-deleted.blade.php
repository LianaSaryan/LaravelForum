@component('mail::message')
# Account Deleted

# The MEAT LABS Inc. Forum account has been deleted for the following user: {{ $user->username }}.

Thanks,<br>
{{ config('app.name') }}
@endcomponent
