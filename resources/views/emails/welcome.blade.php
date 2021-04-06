@component('mail::message')
# Welcome to localhost.com

You have registered in our site. Press "Go" to continue surfing!

@component('mail::button', ['url' => 'http://localhost:8000/upload'])
Go!
@endcomponent

Thanks, {{ $obj->name }} <br>
{{ config('app.name') }}
@endcomponent