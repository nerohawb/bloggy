@component('mail::message')
# Welcome to Bloggy {{ $user->name }}

Thank so much for registering!

@component('mail::button', ['url' => ''])
Button Text
@endcomponent

@component('mail::panel', ['url' => ''])
'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Praesentium, quisquam.'
-lorem ipsum
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
