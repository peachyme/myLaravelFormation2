@component('mail::message')
# Introduction

Hello motherfuckers !

@component('mail::button', ['url' => $url])
Click here
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
