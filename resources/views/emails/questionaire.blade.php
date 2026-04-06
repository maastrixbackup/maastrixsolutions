@component('mail::message')
# Hello!

{{$body['body']}}

Thanks,<br>
{{ config('app.name') }}
@endcomponent