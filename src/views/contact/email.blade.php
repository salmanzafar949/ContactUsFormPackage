@component('mail::message')
# Introduction
Hi you have new query from {{ $data->email }}
<br>
{{ $data->message }}

{{--@component('mail::button', ['url' => ''])--}}
{{--Button Text--}}
{{--@endcomponent--}}

Thanks,<br>
{{ config('app.name') }}
@endcomponent
