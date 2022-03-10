@component('mail::message')
# Introduction

{{ $guest->name }}

@component('mail::button', ['url' => $url])
Button Text
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
